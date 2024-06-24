<?php

namespace App\Livewire;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class ListarLikes extends Component
{

    public function render()

    {
        $user = auth()->user()->id;
        $posts = Post::where('user_id', $user)->paginate(10);

        return view('livewire.listar-likes', [
            'posts' => $posts,
            'user' => $user,
        ]);
    }
}
