<?php

namespace App\Http\Livewire;

use App\Models\Video;
use Livewire\Component;
use Livewire\WithPagination;

class VideoDashboard extends Component
{
    use WithPagination;

    public function render()
    {
        $videoQuery = Video::latest();
        if (auth()->user()->hasRole('Tipe A')) {
            $videoQuery->limit(3);
        }elseif (auth()->user()->hasRole('Tipe B')) {
            $videoQuery->limit(10);
        }

        $videos = $videoQuery->get()->paginate(8,null,null,'videoPage');

        return view('livewire.video-dashboard',['videos'=>$videos]);
    }
}
