<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;
use Carbon\Carbon;

class ListarPost extends Component
{
    public function render()
    {
        $posts = Post::all();
        $user = User::all();
        return view('livewire.listar-post', compact('posts', 'user'));
    }
}
