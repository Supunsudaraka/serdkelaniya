<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/14/20
 * Time: 8:38 PM
 */

namespace App\Http\Controllers;


use App\Event;
use App\Victory;

class AdminController extends Controller
{

    public function index(){
        return view('administrator.login');
    }

    public function dashboard(){

        $eventCount=Event::where('status',1)->count('idevent');
        $victoryCount=Victory::where('status',1)->count('idvictory');
        return view('administrator.home',['eventCount'=>$eventCount,'victoryCount'=>$victoryCount]);
    }

}
