<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class MostrarPost extends Component
{
    public $post;
    public function render()
    {
        return view('livewire.mostrar-post');
    }
}
