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
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

    public function index()
    {
        return view('administrator.login');
    }

    public function dashboard()
    {

        $eventCount = Event::where('status', 1)->count('idevent');
        $victoryCount = Victory::where('status', 1)->count('idvictory');

        $directories = Storage::allDirectories('public/uploads');
        $totalSize = 0;
        foreach ($directories as $directory) {
            $files = Storage::allFiles($directory);
            foreach ($files as $file) {
                $totalSize += Storage::size($file);
            }
        }

        $totalSize = $totalSize / 1048576;
        $totalSize = round($totalSize);
        $storageAllocated = 500;
        return view('administrator.home', ['eventCount' => $eventCount, 'victoryCount' => $victoryCount, 'storageUsage' => $totalSize, 'storageAllocated' => $storageAllocated]);
    }
}
