<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class NavSearch extends Component
{
    public string $cenerentola = '';
    public $posts;
    public function search()
    {
        $this->posts = Post::where('title', 'LIKE', '%' . $this->cenerentola . '%')->get();
    }
    public function render()
    {
        return view('livewire.nav-search');
    }
}
