<?php

namespace App\Livewire;

use App\Models\Categoria;
use App\Models\Post;
use Livewire\Component;
use Livewire\Attributes\On;

class FiltrarPosts extends Component
{
    public $termino;
    public $categoria;
    public $salario;

    public function leerDatosFormulario()
    {

        $this->dispatch('buscar', $this->termino, $this->categoria, $this->salario);
    }
    public function buscar($termino, $categoria, $salario)
    {
        $this->termino = $termino;
        $this->categoria = $categoria;
        $this->salario = $salario;
    }
    public function render()
    {

        return view('livewire.filtrar-posts');
    }
}
