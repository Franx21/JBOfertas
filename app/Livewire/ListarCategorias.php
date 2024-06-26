<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Post;
use Livewire\Attributes\On;
use Livewire\Component;

class ListarCategorias extends Component
{
    public $termino;

    #[On('buscar')]
    public function buscar($termino)
    {
        $this->termino = $termino;
    }
    public function render()
    {
        $posts = Post::when($this->termino, function ($query) {
            $query->where('titulo', 'LIKE', "%" . $this->termino . "%");
        })->when($this->termino, function ($query) {
            $query->orWhere('tienda', $this->termino);
        })->paginate(10);

        $categorias = Categoria::all();
        return view('livewire.listar-categorias', [
            'categorias' => $categorias,
        ]);
    }
}
