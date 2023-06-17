<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 8/18/20
 * Time: 9:36 PM
 */

namespace App\Http\Controllers;


use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index(){

        $events = Event::orderBy('idevent', 'desc')->take(3)->get();
        return view('index',['events'=>$events]);
    }

    public function storeLang(Request $request){

        App::setLocale($request['selectedLang']);
        return redirect()->route($request['currentRoute'],['language'=>App::getLocale()]);
    }

    public function about(){
        return view('about');
    }

}
