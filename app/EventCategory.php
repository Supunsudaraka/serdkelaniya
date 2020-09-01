<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/15/20
 * Time: 4:26 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{
    protected $table='event_category';
    protected $primaryKey='idevent_category';
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

    public function events(){
        return $this->hasMany(Event::class,'idevent_category');
    }
}