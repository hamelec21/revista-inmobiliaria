<?php

namespace App\Http\Livewire\Frontend\Noticias;

use App\Models\News;
use Livewire\Component;

class Index extends Component
{

public $search =null;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $noticias =News::orderBy('id','Desc')
            ->paginate(6);

        return view('livewire.frontend.noticias.index',compact('noticias'));
    }
}
