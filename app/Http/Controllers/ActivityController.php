<?php

namespace App\Http\Controllers;

use App\Activity;
use App\ActivityCategory;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index(Request $request){

        $id = $request['id'];
        if($id == null) return redirect()->route('welcome',app()->getLocale());
        $activities = Activity::where('idactivity_category',intval($id))->latest()->paginate(10);
        return view('activity.list',['activities'=>$activities,'category'=>ActivityCategory::find(intval($id))]);
    }

    public function show(Request $request){
        $id = $request['id'];
        if($id == null) return redirect()->route('welcome',app()->getLocale());
        $activity = Activity::find(intval($id));
        return view('activity.view',['activity'=>$activity]);
    }
}
