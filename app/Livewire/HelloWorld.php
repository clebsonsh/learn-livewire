<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Hello world')]
class HelloWorld extends Component
{
    public function render()
    {
        return view('livewire.hello-world');
    }
}
