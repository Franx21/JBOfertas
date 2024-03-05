<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearPost extends Component
{
    public $titulo;
    public $link;
    public $precio_oferta;
    public $precio_regular;
    public $envio;
    public $tienda;
    public $cupon;
    public $categoria;
    public $primer_dia;
    public $ultimo_dia;
    public $descripcion;

    use WithFileUploads;

    protected $rules = [
        'titulo' => 'required|string',
        'link' => 'required',
        'precio_oferta' => 'required',
        'precio_regular' => 'nullable',
        'envio' => 'nullable',
        'tienda' => 'required',
        'cupon' => 'nullable',
        'categoria' => 'required',
        'primer_dia' => 'required',
        'ultimo_dia' => 'nullable',
        'descripcion' => 'required',
    ];

    public function crearPost()
    {
        $datos = $this->validate();
        //Almacenar la imagen
        $imagen = $this->imagen->storage_path('app/public/ofertas');
        // $datos['imagen'] = str_replace('app/public/ofertas', '', $imagen);

        //crear vacante
        Post::create([
            'titulo' => $datos['titulo'],
            'link' => $datos['link'],
            'precio_oferta' => $datos['precio_oferta'],
            'precio_regular' => $datos['precio_regular'],
            'envio' => $datos['envio'],
            'tienda' => $datos['tienda'],
            'cupon' => $datos['cupon'],
            'categoria_id' => $datos['categoria'],
            'primer_dia' => $datos['primer_dia'],
            'ultimo_dia' => $datos['ultimo_dia'],
            'descripcion' => $datos['descripcion'],
            'user_id' => auth()->user()->id,
        ]);

        //crear mensaje
        session()->flash('mensaje', 'La oferta se publico correctamente');

        return  redirect()->route('vacantes.index');
    }

    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.crear-post', [
            'categorias' => $categorias,
        ]);
    }
}
