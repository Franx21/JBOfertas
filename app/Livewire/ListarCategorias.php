<?php

namespace App\Livewire;

use App\Models\Categoria;
use Livewire\Component;

class ListarCategorias extends Component
{
    public function render()
    {
        $categorias = Categoria::all();
        return view('livewire.listar-categorias', [
            'categorias' => $categorias,
        ]);
    }
}
