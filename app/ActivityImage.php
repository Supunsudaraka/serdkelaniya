<?php

namespace App;

use App\Classes\Media;
use Illuminate\Database\Eloquent\Model;

class ActivityImage extends Model
{
    protected $table='activity_image';
    protected $primaryKey='idactivity_image';

    public function activity(){
        return $this->belongsTo(Event::class,'idactivity');
    }

    public function getPath(){
        return Media::getUploadedPath('activity',$this);
    }
}
