<?php

namespace App\Http\Livewire\Panel\Noticia;

use App\Models\News;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\WithFileUploads;


class EditarNoticia extends Component
{
    use WithFileUploads;
    public $open_editar =false;
    public $new;
    public $titulo, $extracto,$imagen ,$url; // variables publicas del formularios

    protected $rules =[
        'new.titulo' => 'required|min:30|max:100',
        'new.extracto' => 'required|min:60|max:215',
        'new.imagen'=>'required',
        'new.url' => 'required|max:255',
    ];

    public function mount(News $new)
    {
        $this->new = $new;

        $this->identificador = rand();
    }

    public function save()

    {
        $this->validate();
        if ($this->imagen) {
            Storage::delete([$this->new->imagen]);
            $this->new->imagen = $this->imagen->store('public/imagen_news');
            //codigo para subir las evaluaciones de los docentes//
        }
        $this->new->save();
        $this->reset(['open_editar','titulo','extracto','imagen','url']);
        $this->identificador = rand();
        $this->emit('render');
        $this->emit('editar', 'El Registro fue Creado Exitosamente'); //mensaje
    }











    public function render()
    {
        return view('livewire.panel.noticia.editar-noticia');
    }
}
