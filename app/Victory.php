<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/23/20
 * Time: 12:00 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Victory extends Model
{
    protected $table='victory';
    protected $primaryKey='idvictory';
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
        return $this->hasMany(VictoryImage::class,'idvictory');
    }

    public function getFirstImage(){
        return $this->images()->first()->getPath();
    }
}