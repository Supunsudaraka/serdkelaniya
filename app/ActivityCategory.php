<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityCategory extends Model
{
    protected $table='activity_category';
    protected $primaryKey='idactivity_category';
    protected $appends = ['id','name'];

    public function getIdAttribute()
    {
        return $this->{$this->primaryKey};
    }

    public function getNameAttribute()
    {
        $column = 'name_'.app()->getLocale();
        return $this->{$column} != null ?  $this->{$column} : $this->name_en;
    }

    public function getHeadingAttribute()
    {
        $column = 'heading_'.app()->getLocale();
        return $this->{$column} != null ?  $this->{$column} : $this->heading_en;
    }

    public function activities(){
        return $this->hasMany(Activity::class,'idactivity_category');
    }
}
