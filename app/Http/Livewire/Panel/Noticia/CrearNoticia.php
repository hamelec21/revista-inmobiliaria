<?php

namespace App\Http\Livewire\Panel\Noticia;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearNoticia extends Component
{
    use WithFileUploads;
    public $open_crear =false;

    public $titulo, $extracto,$imagen ,$url; // variables publicas del formularios

    protected $rules = [
        'titulo' => 'required|min:30|max:100',
        'extracto' => 'required|min:60|max:215',
        'imagen'=>'required',
        'url' => 'required|max:255',
    ];

    public function save()
    {
        $this-> validate();
        $imagen = $this->imagen->store('public/imagen_news');
        News::create([
            'titulo' => $this->titulo,
            'extracto' => $this->extracto,
            'url' => $this->url,
            'imagen' => $imagen,
        ]);
        $this->reset(['open_crear', 'titulo','extracto','url','imagen']);
        $this->emit('render');
        $this->emit('insert', 'El Registro fue Creado Exitosamente');
    }











    public function render()
    {
        return view('livewire.panel.noticia.crear-noticia');
    }
}
