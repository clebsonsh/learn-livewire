<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]
class Todos extends Component
{
    public string $todo = '';

    public function add()
    {
        Todo::factory()
            ->create([
                'title' => $this->todo,
            ]);

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos', [
            'todos' => Todo::query()
                ->latest()
                ->get(),
        ]);
    }
}
