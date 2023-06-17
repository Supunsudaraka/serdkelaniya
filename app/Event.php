<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/15/20
 * Time: 7:43 PM
 */

namespace App;

use App\Classes\Media;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table='event';
    protected $primaryKey='idevent';
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
        return $this->belongsTo(EventCategory::class,'idevent_category');
    }

    public function images(){
        return $this->hasMany(EventImage::class,'idevent');
    }

    public function getFirstImage(){
        return $this->images()->first()->getPath();
    }



}