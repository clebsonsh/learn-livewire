<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Post')]
class CreatePost extends Component
{
    #[Rule('required', message: 'Yo, add a title')]
    #[Rule('min:4', message: 'Yo, too short')]
    public $title = '';

    #[Rule('required')]
    public $content = '';

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->redirect('/posts');
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
