<?php

namespace App\Http\Livewire;

use App\Models\Artikel;
use Livewire\Component;
use Livewire\WithPagination;

class ArticleDashboard extends Component
{
    use WithPagination;



    public function render()
    {
        $artikelQuery = Artikel::latest();
        // dump($artikelQuery);
        if (auth()->user()->hasRole('Tipe A')) {
            $artikelQuery = $artikelQuery->take(3);
        }elseif (auth()->user()->hasRole('Tipe B')) {
            $artikelQuery = $artikelQuery->take(10);
            // dump($artikelQuery);
        }
        $articles = $artikelQuery->get()->paginate(5,null,null,'artikelPage');
        // dump($articles);

        return view('livewire.article-dashboard',['articles'=>$articles]);
    }
}
