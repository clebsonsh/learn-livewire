<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Todos extends Component
{
    public string $todo = '';

    public Collection $todos;

    public function mount()
    {
        $this->todos = Todo::query()
            ->latest()
            ->get();
    }

    public function add()
    {
        $todo = Todo::factory()
            ->create([
                'title' => $this->todo,
            ]);

        $this->todos->prepend($todo);

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
