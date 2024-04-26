<?php

namespace App\Livewire;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class PopularPosts extends Component
{
    public $post;
    public $isLiked;
    public $likes;

    public function mount($post)
    {
        $this->isLiked = $post->checkLike(auth()->user());
        $this->likes = $post->likes->count();
    }

    public function like()
    {
        if ($this->post->checkLike(auth()->user())) {
            $this->post->likes()->where('post_id', $this->post->id)->delete();
            $this->isLiked = false;
            $this->likes--;
        } else {
            $this->post->likes()->create([
                'user_id' => auth()->user()->id
            ]);
            $this->isLiked = true;
            $this->likes++;
        }
    }

    public function render()
    {
        $posts = Post::all();
        $user = User::all();
        $likes = Like::all();
        return view('livewire.popular-posts', compact('posts', 'user', 'likes'));
    }
}
