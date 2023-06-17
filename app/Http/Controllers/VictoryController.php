<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/23/20
 * Time: 11:23 AM
 */

namespace App\Http\Controllers;

use App\Traits\UploadTrait;
use App\Victory;
use App\VictoryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VictoryController extends Controller
{
    use UploadTrait;
    public function addVictory(){

        return view('victory.add-victory');
    }

    public function victories(){

        $victories=Victory::where('status',1)->latest()->get();
        return view('victories',['victories'=>$victories]);
    }

    public function viewVictory(){

        $victories=Victory::where('status',1)->latest()->get();

        return view('victory.view-victory',['victories'=>$victories]);
    }

    public function editVictory(Request $request){

        $victoryId = $request['victoryId'];
        if($victoryId == null) return redirect()->route('welcome');
        $getImages=VictoryImage::where('idvictory',$victoryId)->get();

        return view('victory.edit-victory',['getImages'=>$getImages,'idvictory'=>$victoryId]);
    }

    public function getVictoryDetail(Request $request){

        $victoryId=$request['victoryId'];

        $getVictory=Victory::find($victoryId);

        return response()->json($getVictory);

    }

    public function store(Request $request){

        $eName=$request['eName'];
        $eDescription=$request['eDescription'];



        $validator = \Validator::make($request->all(), [

            'eDescription' => 'required',
            'eName' => 'required|max:45',

        ], [
            'eDescription.required' => 'Description should be provided!',
            'eName.required' => 'Victory Name should be provided!',
            'eName.max' => 'Victory Name must be less than 45 characters long.',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }

        $imageAvailable = VictoryImage::where('idvictory',0)->get();

        if(count($imageAvailable)==0){
            return response()->json(['eventImagesError' =>'Please add victory images!']);
        }

        $save=new Victory();
        $save->iduser=Auth::user()->iduser;
        $save->name_en=strtoupper($eName);
        $save->name_si=$request['sName'];
        $save->description_en=$eDescription;
        $save->description_si=$request['sDescription'];
        $save->status=1;
        $save->save();

        $updateImageID = VictoryImage::where('idvictory',0)->get();
        foreach ($updateImageID as $imageID){
            $imageID->idvictory = $save->idvictory;
            $imageID->update();
        }

        return response()->json(['success'=>'Victory saved successfully']);
    }

    public function update(Request $request){

        $eName=$request['eName'];
        $eDescription=$request['eDescription'];
        $id=$request['id'];


        $validator = \Validator::make($request->all(), [
            'eDescription' => 'required',
            'eName' => 'required|max:45',
        ], [
            'eDescription.required' => 'Description should be provided!',
            'eName.required' => 'Victory Name should be provided!',
            'eName.max' => 'Victory Name must be less than 45 characters long.',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }

        $update=Victory::find($id);
        $update->name_en=strtoupper($eName);
        $update->name_si=$request['sName'];
        $update->description_si=$request['sDescription'];
        $update->description_en=$eDescription;
        $update->save();

        return response()->json(['success'=>'success']);
    }

    public function delete(Request $request){

        $victoryId=$request['victoryId'];

        $deleteVictory=Victory::find($victoryId);

        if($deleteVictory!=null){

            if ($deleteVictory->image != null || $deleteVictory->image != ""){
                $this->deleteUploadedImage($deleteVictory,'victory');
            }

            $deleteVictory->delete();
            return response()->json(['success'=>'victory deleted successfully']);
        }
    }

    public function deleteImages(Request $request){
        $id=$request['id'];

        $images = VictoryImage::where('idvictory',intval($id))->get();

        foreach ($images as $image){

            if ($image->image != null || $image->image != ""){
                $this->deleteUploadedImage($image,'victory');

            }
            $image->delete();
        }

        $deleteVictory = Victory::find(intval($id));
        $deleteVictory->delete();

        return response()->json(['success'=>'success']);
    }

    function upload(Request $request)
    {
        $file =  $this->uploadFile($request,'victory');
        $imageName = $file['name'];

        $upload = new VictoryImage();
        $upload->idvictory = 0;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }

    public function deleteImage(Request $request){

        $id=$request['id'];

        $image=VictoryImage::find($id);

        if ($image->image != null || $image->image != ""){
            $this->deleteUploadedImage($image,'victory');


        }
        $image->delete();

        return response()->json(['success'=>'success']);
    }

    public function editImage(Request $request){

        $id=$request['id'];
        $file =  $this->uploadFile($request,'victory');
        $imageName = $file['name'];

        $upload = new VictoryImage();
        $upload->idvictory = $id;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }

    public function show(Request $request){
        $id = $request['id'];
        if($id == null) return redirect()->route('welcome',app()->getLocale());
        $record = Victory::find(intval($id));
        if($record == null) return redirect()->back()->withErrors('commonError','Victory not found');
        return view('victory.show',['record'=>$record]);
    }
}