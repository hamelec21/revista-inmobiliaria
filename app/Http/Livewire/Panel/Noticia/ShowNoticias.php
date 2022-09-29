<?php

namespace App\Http\Livewire\Panel\Noticia;


use App\Models\News;
use App\Models\NoticiaModel;
use Livewire\Component;
use Livewire\WithPagination;
class ShowNoticias extends Component
{

    public $search;
    use WithPagination;
    protected $listeners = ['render' => 'render'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function destroy($id)
    {
        News::destroy($id);
    }


    public function render()
    {
        $news =News::buscar($this->search)
            ->orderBy('id','Desc')
        ->paginate(8);

        return view('livewire.panel.noticia.show-noticias', compact('news'));
    }
}
