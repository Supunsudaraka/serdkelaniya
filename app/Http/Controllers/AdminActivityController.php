<?php

namespace App\Http\Controllers;

use App\Activity;
use App\ActivityCategory;
use App\ActivityImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminActivityController extends Controller
{
    public function index(){

        $categories = ActivityCategory::where('status',1)->get();

        return view('activity.add',['categories'=>$categories]);
    }

    public function viewActivity(){

        $activities=Activity::where('status',1)->latest()->get();

        return view('activity.view-activities',['activities'=>$activities]);
    }

    public function editActivity(Request $request){

        $idactivity=$request['idactivity'];
        if($idactivity == null) return redirect()->route('welcome');
        $activityCategories=ActivityCategory::where('status',1)->get();
        $getImages=ActivityImage::where('idactivity',$idactivity)->get();

        return view('activity.edit-activity',['getImages'=>$getImages,'idactivity'=>$idactivity,'activityCategories'=>$activityCategories]);
    }

    public function store(Request $request){


        $category=$request['category'];
        $eName=$request['eName'];
        $eDescription=$request['eDescription'];



        $validator = \Validator::make($request->all(), [

            'category' => 'required',
            'eDescription' => 'required',
            'eName' => 'required|max:45',

        ], [
            'category.required' => 'Category should be provided!',
            'eDescription.required' => 'Description should be provided!',
            'eName.required' => 'Activity Name should be provided!',
            'eName.max' => 'Activity Name must be less than 45 characters long.',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }

        $imageAvailable = ActivityImage::where('idactivity',0)->get();

        if(count($imageAvailable)==0){
            return response()->json(['activityImagesError' =>'Please add activity images!']);
        }

        $save=new Activity();
        $save->idactivity_category=$category;
        $save->iduser=Auth::user()->iduser;
        $save->name_en=strtoupper($eName);
        $save->name_si=$request['sName'];
        $save->description_en=$eDescription;
        $save->description_si=$request['sDescription'];
        $save->status=1;
        $save->save();

        $updateImageID = ActivityImage::where('idactivity',0)->get();
        foreach ($updateImageID as $imageID){
            $imageID->idactivity = $save->idactivity;
            $imageID->update();
        }

        return response()->json(['success'=>'activity saved successfully']);
    }

    function upload(Request $request)
    {
        $imageName='';
        if($request->hasFile('file'))
        {
            $imageFile = $request->file('file');
            $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
            $destinationPath = public_path('myAssets/images/uploads/activity');
            $imageFile->move($destinationPath, $imageName);
        }

        $upload = new ActivityImage();
        $upload->idactivity = 0;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }

    public function deleteImages(Request $request)
    {

        $getImages=ActivityImage::where('idactivity',0)->get();

        if($getImages!=null){

            foreach ($getImages as $getImage){


                if ($getImage->image != null || $getImage->image != ""){
                    $path_old = public_path('myAssets\images\uploads\activity/') . $getImage->image;

                    if (file_exists($path_old)) {
                        unlink($path_old);
                    }
                    $getImage->delete();
                }


            }
        }

        return response()->json($getImages);
    }

    public function deleteActivity(Request $request){

        $id = $request['id'];

        $deleteActivityImg=ActivityImage::where('idactivity',$id)->get();

        foreach ($deleteActivityImg as $delete){


            if ($delete->image != null || $delete->image != ""){
                $path_old = public_path('myAssets\images\uploads\activity') . $delete->image;

                if (file_exists($path_old)) {
                    unlink($path_old);
                }
            }
            $delete->delete();

        }

        $deleteActivity=Activity::find($id);
        $deleteActivity->delete();

        return response()->json(['success'=>'success']);
    }

    public function getActivityDetailById(Request $request){


        $idactivity=$request['idactivity'];



        $getActivity=Activity::find($idactivity);

        return response()->json(['activity'=>$getActivity]);
    }

    public function deleteImageById(Request $request){

        $activityImgId=$request['activityImgId'];

        $deleteImg=ActivityImage::find($activityImgId);



        if ($deleteImg->image != null || $deleteImg->image != ""){
            $path_old = public_path('myAssets/images/uploads/activity') . $deleteImg->image;

            if (file_exists($path_old)) {
                unlink($path_old);
            }

        }
        $deleteImg->delete();


        return response()->json(['success'=>'success']);
    }

    public function editImage(Request $request){

        $idactivity=$request['idactivity'];
        if($request->hasFile('file'))
        {
            $imageFile = $request->file('file');
            $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('myAssets/images/uploads/activity'), $imageName);
        }

        $upload = new ActivityImage();
        $upload->idactivity = $idactivity;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }

    public function update(Request $request){

        $category=$request['category'];
        $eName=$request['eName'];
        $eDescription=$request['eDescription'];
        $idactivity=$request['idactivity'];

        $validator = \Validator::make($request->all(), [
            'category' => 'required',
            'eDescription' => 'required',
            'eName' => 'required|max:45',
        ], [
            'category.required' => 'Category should be provided!',
            'eDescription.required' => 'Description should be provided!',
            'eName.required' => 'Activity Name should be provided!',
            'eName.max' => 'Activity Name must be less than 45 characters long.',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }

        $update=Activity::find($idactivity);
        $update->idactivity_category=$category;
        $update->name_en=strtoupper($eName);
        $update->name_si=$request['sName'];
        $update->description_si=$request['sDescription'];
        $update->description_en=$eDescription;
        $update->save();

        return response()->json(['success'=>'success']);
    }
}
