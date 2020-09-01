<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/15/20
 * Time: 7:07 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class EventImage extends Model
{
    protected $table='event_image';
    protected $primaryKey='idevent_image';

    public function event(){
        return $this->belongsTo(Event::class,'idevent');
    }
}