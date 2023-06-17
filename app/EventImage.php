<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/15/20
 * Time: 7:07 PM
 */

namespace App;

use App\Classes\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class EventImage extends Model
{
    protected $table='event_image';
    protected $primaryKey='idevent_image';

    public function event(){
        return $this->belongsTo(Event::class,'idevent');
    }

    public function getPath(){
        return Media::getUploadedPath('event',$this);
    }
}