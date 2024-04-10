<?php

namespace App\Livewire;

use App\Notifications\LikePost as NotificationsLikePost;
use Livewire\Component;

class LikePost extends Component
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
            //Crear notificacion y enviar email
            $this->post->like->notify(new NotificationsLikePost($this->post->id, $this->post->titulo,  auth()->user()->id));
        }
    }
    public function render()
    {
        return view('livewire.like-post');
    }
}
