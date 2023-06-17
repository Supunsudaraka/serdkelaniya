<?php

namespace App\Classes;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class Media
{
    public static function getUploadedPath($folder,$image){
        $path = 'uploads/'.$folder.'/'.$image->image;
        $exists = Storage::disk('public')->exists($path);
        if($exists){
            return URL::asset('storage/uploads/'.$folder.'/'.$image->image);
        }
        return URL::asset('myAssets/images/placeholder.jpg');
    }
}
