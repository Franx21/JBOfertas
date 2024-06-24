<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __invoke()
    {
        $user = auth()->user();

        $posts = Post::where('user_id', $user->id)->paginate(2);
        return view(
            'perfil.likes',
            [
                'post' => $posts,
                'user' => $user,
            ]
        );
    }
}
