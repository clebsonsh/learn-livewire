<div class="flex flex-col space-y-2 items-center justify-center gap-x-4 h-screen">
    <div>
        <form wire:submit="add">
            <input wire:model="todo" type="text" class="text-slate-800">
            <button type="submit"
                class="ml-2 px-3 py-1 ring-2 rounded hover:cursor-pointer bg-black/90 active:bg-black/50 transition-colors">
                Add
            </button>
        </form>
    </div>
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>
</div>
