<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Post;
use App\Models\User;
use App\Notifications\ComentarioPost;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    public $post;

    public function store(Request $request, User $user, Post $post)
    {
        $this->validate(
            $request,
            [
                'comentario' => 'required|max:255',
            ]
        );

        Comentario::create([
            'post_id' => $post->id,
            'user_id' => auth()->user()->id,
            'comentario' => $request->comentario,
        ]);
        $this->post = $post;

        $this->post->comentarioNotificacion->notify(new ComentarioPost($this->post->id, $this->post->titulo,  auth()->user()->id));
        return back()->with('mensaje', 'Comentario realizado correctamente');
    }
}
