<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='news';
    protected $primaryKey='idnews';
    protected $appends = ['id','name','description'];

    public function getIdAttribute()
    {
        return $this->{$this->primaryKey};
    }

    public function getNameAttribute()
    {
        $column = 'name_'.app()->getLocale();
        return $this->{$column} != null ?  $this->{$column} : $this->name_en;
    }

    public function getDescriptionAttribute()
    {
        $column = 'description_'.app()->getLocale();
        return $this->{$column} != null ?  $this->{$column} : $this->description_en;
    }


    public function images(){
        return $this->hasMany(NewsImage::class,'idnews');
    }
}
