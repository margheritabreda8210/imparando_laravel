<?php

namespace App\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $post;
    public $test='';
    public function mount($post)
    {
        $this->post = $post;
    }

    public function testing(){
        $this->test='test';
    }

    public function render()
    {
        return view('livewire.post');
    }
}
