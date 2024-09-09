<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostRow extends Component
{
    public Post $post;

    public function archive(): void
    {
        $this->post->archive();
    }

    public function recover(): void
    {
        $this->post->recover();
    }
}
