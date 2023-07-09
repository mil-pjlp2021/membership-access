<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        // $videosQuery = Video::latest();;
        // if (auth()->user()->hasRole('Tipe A')) {
        //     $videos = $videosQuery->limit(3);
        // }elseif (auth()->user()->hasRole('Tipe B')) {
        //     $videos = $videosQuery->limit(10);
        // }
        // $videos = $videosQuery->paginate(8,['*'],'videos');
        return view('dashboard');
    }
}
