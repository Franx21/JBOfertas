<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Carbon\Carbon;

class ListarPost extends Component
{
    public function render()
    {
        $posts = Post::all();
        return view('livewire.listar-post', compact('posts'));
    }
}
