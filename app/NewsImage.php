<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $table='news_image';
    protected $primaryKey='idnews_image';

    public function news(){
        return $this->belongsTo(News::class,'idnews');
    }
}
