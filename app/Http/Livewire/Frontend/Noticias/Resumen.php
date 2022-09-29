<?php

namespace App\Http\Livewire\Frontend\Noticias;

use App\Models\News;
use Livewire\Component;

class Resumen extends Component
{
    public function render()
    {
        $resumen =News::orderBy('id','Desc')
          ->  take(3)->get();
        return view('livewire.frontend.noticias.resumen',compact('resumen'));
    }
}
