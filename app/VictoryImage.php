<?php

namespace App;

use App\Classes\Media;
use Illuminate\Database\Eloquent\Model;

class VictoryImage extends Model
{
    protected $table='victory_image';
    protected $primaryKey='idvictory_image';

    public function victory(){
        return $this->belongsTo(Victory::class,'idvictory');
    }

    public function getPath(){
        return Media::getUploadedPath('victory',$this);
    }
}
