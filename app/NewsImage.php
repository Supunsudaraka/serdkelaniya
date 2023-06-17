<?php

namespace App;

use App\Classes\Media;
use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $table='news_image';
    protected $primaryKey='idnews_image';

    public function news(){
        return $this->belongsTo(News::class,'idnews');
    }

    public function getPath(){
        return Media::getUploadedPath().'/news/'.$this->image;
    }
}
