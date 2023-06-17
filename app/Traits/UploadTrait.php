<?php
namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait  UploadTrait
{

    public function uploadFile($request,$folder){
        $imageName='';
        if($request->hasFile('file'))
        {
            $imageFile = $request->file('file');
            $imageName = uniqid().'.'.$imageFile->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('uploads/'.$folder.'/', $imageFile,$imageName);
        }
        return ['name'=>$imageName];
    }

    public function deleteUploadedImage($image,$folder){
        $path = 'uploads/'.$folder.'/'.$image->image;
        $exists = Storage::disk('public')->exists($path);
        if($exists){
            Storage::disk('public')->delete($path);
        }
    }
}