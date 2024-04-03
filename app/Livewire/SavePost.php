<?php

namespace App\Livewire;

use Livewire\Component;

class SavePost extends Component
{
    public $post;
    public $isSaved;
    public $saves;

    public function mount($post)
    {
        $this->isSaved = $post->checkSave(auth()->user());
        $this->saves = $post->saves->count();
    }

    public function save()
    {
        if ($this->post->checkSave(auth()->user())) {
            $this->post->saves()->where('post_id', $this->post->id)->delete();
            $this->isSaved = false;
            $this->saves--;
        } else {
            $this->post->saves()->create([
                'user_id' => auth()->user()->id
            ]);
            $this->isSaved = true;
            $this->saves++;
        }
    }
    public function render()
    {
        return view('livewire.save-post');
    }
}
