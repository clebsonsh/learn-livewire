<div class="flex flex-col space-y-2 items-center justify-center gap-x-4 h-screen">
    <div class="w-96">
        <form wire:submit="add" class="mb-4 flex justify-between items-center">
            <input wire:model="todo" type="text" class="text-slate-800">
            <button type="submit"
                class="ml-2 px-3 py-1 ring-2 rounded hover:cursor-pointer bg-black/90 active:bg-black/50 transition-colors">
                Add
            </button>
        </form>
        <ul>
            @foreach ($todos as $todo)
                <li>{{ $todo->title }}</li>
            @endforeach
        </ul>
    </div>
</div>
