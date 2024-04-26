<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class HomePosts extends Component
{
    public $termino;
    public $categoria;

    #[On('buscar')]
    public function buscar($termino, $categoria)
    {
        $this->termino = $termino;
        $this->categoria = $categoria;
    }
    public function render()
    {
        $posts = Post::when($this->termino, function ($query) {
            $query->where('titulo', 'LIKE', "%" . $this->termino . "%");
        })->when($this->termino, function ($query) {
            $query->orWhere('tienda', $this->termino);
        })->when($this->categoria, function ($query) {
            $query->where('categoria_id', $this->categoria);
        })->paginate(10);

        return view('livewire.home-posts', [
            'posts' => $posts
        ]);
    }
}
