<?php

namespace App\Classes;

use Illuminate\Support\Facades\URL;

class Media
{
    public static function getUploadedPath(){
        return URL::asset('myAssets/images/uploads');
    }
}
