<?php

namespace App\Http\Controllers;

use App\News;
use App\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function addNews(){

        return view('news.add');
    }

    public function news(){

        $news=News::where('status',1)->latest()->get();
        return view('news',['newses'=>$news]);
    }

    public function viewNews(){

        $news=News::where('status',1)->latest()->get();
        return view('news.view',['newses'=>$news]);
    }

    public function editNews(Request $request){

        $newsId = $request['newsId'];
        if($newsId == null) return redirect()->route('welcome');
        $getImages=NewsImage::where('idnews',$newsId)->get();

        return view('news.edit',['getImages'=>$getImages,'idnews'=>$newsId]);
    }

    public function getNewsDetail(Request $request){

        $newsId=$request['newsId'];
        $getNews=News::find($newsId);
        return response()->json($getNews);
    }

    public function store(Request $request){

        $eName=$request['eName'];
        $eDescription=$request['eDescription'];

        $validator = \Validator::make($request->all(), [

            'eDescription' => 'required',
            'eName' => 'required|max:45',

        ], [
            'eDescription.required' => 'Description should be provided!',
            'eName.required' => 'News Name should be provided!',
            'eName.max' => 'News Name must be less than 45 characters long.',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }

        $imageAvailable = NewsImage::where('idnews',0)->get();

        if(count($imageAvailable)==0){
            return response()->json(['eventImagesError' =>'Please add news images!']);
        }

        $save=new News();
        $save->iduser=Auth::user()->iduser;
        $save->name_en=strtoupper($eName);
        $save->name_si=$request['sName'];
        $save->description_en=$eDescription;
        $save->description_si=$request['sDescription'];
        $save->status=1;
        $save->save();

        $updateImageID = NewsImage::where('idnews',0)->get();
        foreach ($updateImageID as $imageID){
            $imageID->idnews = $save->idnews;
            $imageID->update();
        }

        return response()->json(['success'=>'News saved successfully']);
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
            'eName.required' => 'News Name should be provided!',
            'eName.max' => 'News Name must be less than 45 characters long.',
        ]);


        if ($validator->fails()) {
            return response()->json(['errors' =>$validator->errors()]);
        }

        $update=News::find($id);
        $update->name_en=strtoupper($eName);
        $update->name_si=$request['sName'];
        $update->description_si=$request['sDescription'];
        $update->description_en=$eDescription;
        $update->save();

        return response()->json(['success'=>'success']);
    }

    public function delete(Request $request){

        $newsId=$request['newsId'];

        $deleteNews=News::find($newsId);

        if($deleteNews!=null){

            if ($deleteNews->image != null || $deleteNews->image != ""){
                $path_old = public_path('myAssets/images/uploads/news/') . $deleteNews->image;

                if ($path_old) {
                    unlink($path_old);
                }
            }

            $deleteNews->delete();
            return response()->json(['success'=>'news deleted successfully']);
        }
    }

    public function deleteImages(Request $request){
        $id=$request['id'];

        $images = NewsImage::where('idnews',intval($id))->get();

        foreach ($images as $image){

            if ($image->image != null || $image->image != ""){
                $path = public_path('myAssets\images\uploads\event') . $image->image;

                if (file_exists($path)) {
                    unlink($path);
                }
            }
            $image->delete();
        }

        $deleteNews = News::find(intval($id));
        $deleteNews->delete();

        return response()->json(['success'=>'success']);
    }

    function upload(Request $request)
    {
        $imageName='';
        if($request->hasFile('file'))
        {
            $imageFile = $request->file('file');
            $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
            $destinationPath = public_path('myAssets/images/uploads/news');
            $imageFile->move($destinationPath, $imageName);
        }

        $upload = new NewsImage();
        $upload->idnews = 0;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }

    public function deleteImage(Request $request){

        $id=$request['id'];

        $image=NewsImage::find($id);

        if ($image->image != null || $image->image != ""){
            $path = public_path('myAssets\images\uploads\event') . $image->image;

            if (file_exists($path)) {
                unlink($path);
            }

        }
        $image->delete();

        return response()->json(['success'=>'success']);
    }

    public function editImage(Request $request){

        $id=$request['id'];
        $imageName = "";
        if($request->hasFile('file'))
        {
            $imageFile = $request->file('file');
            $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
            $imageFile->move(public_path('myAssets/images/uploads/news'), $imageName);
        }

        $upload = new NewsImage();
        $upload->idnews = $id;
        $upload->image = $imageName;
        $upload->status = 1;
        $upload->save();

        return response()->json(['Status'=>true, 'Message'=>'Image(s) Uploaded.']);
    }

    public function show(Request $request){
        $id = $request['id'];
        if($id == null) return redirect()->route('welcome',app()->getLocale());
        $record = News::find(intval($id));
        if($record == null) return redirect()->back()->withErrors('commonError','News not found');
        return view('news.show',['record'=>$record]);
    }
}
