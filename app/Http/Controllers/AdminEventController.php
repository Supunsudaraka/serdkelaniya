<?php
namespace App\Http\Controllers;

use App\Event;
use App\EventCategory;
use App\EventImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminEventController extends Controller
{
    use UploadTrait;
    
    public function addEvent(){

        $eventCategories=EventCategory::where('status',1)->get();

        return view('event.add-event',['eventCategories'=>$eventCategories]);
    }

    public function viewEvent(){

        $events=Event::where('status',1)->latest()->get();

        return view('event.view-events',['events'=>$events]);
    }

    public function editEvent(Request $request){

        $idevent=$request['idevent'];
        if($idevent == null) return redirect()->route('welcome');
        $eventCategories=EventCategory::where('status',1)->get();
        $getImages=EventImage::where('idevent',$idevent)->get();

        return view('event.edit-event',['getImages'=>$getImages,'idevent'=>$idevent,'eventCategories'=>$eventCategories]);
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
            'eName.required' => 'Event Name should be provided!',
            'eName.max' => 'Event Name must be less than 45 characters long.',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }

        $imageAvailable = EventImage::where('idevent',0)->get();

        if(count($imageAvailable)==0){
            return response()->json(['eventImagesError' =>'Please add event images!']);
        }

        $save=new Event();
        $save->idevent_category=$category;
        $save->iduser=Auth::user()->iduser;
        $save->name_en=strtoupper($eName);
        $save->name_si=$request['sName'];
        $save->description_en=$eDescription;
        $save->description_si=$request['sDescription'];
        $save->status=1;
        $save->save();

        $updateImageID = EventImage::where('idevent',0)->get();
        foreach ($updateImageID as $imageID){
            $imageID->idevent = $save->idevent;
            $imageID->update();
        }

        return response()->json(['success'=>'event saved successfully']);
    }

    function upload(Request $request)
    {
        $file =  $this->uploadFile($request,'event');
        $imageName = $file['name'];

        $upload = new EventImage();
        $upload->idevent = 0;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }

    public function deleteImages(Request $request)
    {
        $getImages=EventImage::where('idevent',0)->get();
        if($getImages!=null){
          foreach ($getImages as $getImage){
                if ($getImage->image != null || $getImage->image != ""){
                    $this->deleteUploadedImage($getImage,'event');
                    $getImage->delete();
                }
            }
        }

        return response()->json($getImages);
    }

    public function deleteEvent(Request $request){

        $eventId=$request['eventId'];
        $deleteEventImg=EventImage::where('idevent',$eventId)->get();
        foreach ($deleteEventImg as $delete){

            if ($delete->image != null || $delete->image != ""){
                $this->deleteUploadedImage($delete,'event');
            }
            $delete->delete();
        }

        $deleteEvent=Event::find($eventId);
        $deleteEvent->delete();

        return response()->json(['success'=>'success']);
    }

    public function getEventDetailById(Request $request){


        $idevent=$request['idevent'];
        $getEvent=Event::find($idevent);

        return response()->json(['getEvent'=>$getEvent]);
    }

    public function deleteImageById(Request $request){

        $eventImgId=$request['eventImgId'];
        $deleteImg=EventImage::find($eventImgId);

        if ($deleteImg->image != null || $deleteImg->image != ""){
           $this->deleteUploadedImage($deleteImg,'event');
        }
        $deleteImg->delete();


        return response()->json(['success'=>'success']);
    }

    public function editImage(Request $request){

        $idevent=$request['idevent'];
        $file =  $this->uploadFile($request,'event');
        $imageName = $file['name'];

        $upload = new EventImage();
        $upload->idevent = $idevent;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);


    }

    public function update(Request $request){

        $category=$request['category'];
        $eName=$request['eName'];
        $eDescription=$request['eDescription'];
        $idevent=$request['idevent'];


        $validator = \Validator::make($request->all(), [

            'category' => 'required',
            'eDescription' => 'required',
            'eName' => 'required|max:45',
        ], [
            'category.required' => 'Category should be provided!',
            'eDescription.required' => 'Description should be provided!',
            'eName.required' => 'Event Name should be provided!',
            'eName.max' => 'Event Name must be less than 45 characters long.',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }



        $update=Event::find($idevent);
        $update->idevent_category=$category;
        $update->name_en=strtoupper($eName);
        $update->name_si=$request['sName'];
        $update->description_si=$request['sDescription'];
        $update->description_en=$eDescription;
        $update->save();

        return response()->json(['success'=>'success']);
    }

}
