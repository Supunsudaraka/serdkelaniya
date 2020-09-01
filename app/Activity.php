<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table='activity';
    protected $primaryKey='idactivity';
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

    public function category(){
        return $this->belongsTo(ActivityCategory::class,'idactivity_category');
    }

    public function images(){
        return $this->hasMany(ActivityImage::class,'idactivity');
    }
}
