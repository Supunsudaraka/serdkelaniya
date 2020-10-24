<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/16/20
 * Time: 10:07 AM
 */

namespace App\Http\Controllers;


use App\Event;
use App\EventCategory;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function listView(Request $request){

        $categoryId = $request['categoryId'];
        if($categoryId == null) return redirect()->route('welcome',app()->getLocale());
        $events = Event::where('idevent_category',intval($categoryId))->orderBy('idevent', 'DESC')->paginate(10);
        return view('event.list',['events'=>$events,'category'=>EventCategory::find(intval($categoryId))]);
    }

    public function view(Request $request){
        $eventId = $request['eventId'];
        if($eventId == null) return redirect()->route('welcome',app()->getLocale());
        $event = Event::find(intval($eventId));
        return view('event.view',['event'=>$event]);
    }
}
