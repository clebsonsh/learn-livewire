<div class="p-4">
    <h2 class="text-xl mb-4">Posts:</h2>

    <form wire:submit="save" class="flex flex-col gap-y-4">
        <label class="space-x-4">
            <span>Title</span>
            <input wire:model="title" type="text" class="text-slate-800">
            @error('title')
                <em>{{ $message }}</em>
            @enderror
        </label>

        <label class="space-x-4">
            <span>Content</span>
            <input wire:model="content" type="text" class="text-slate-800">
            @error('content')
                <em>{{ $message }}</em>
            @enderror
        </label>
        <div>
            <button class="px-3 py-1 rounded hover:cursor-pointer ring-1" type="submit">Save</button>
        </div>
    </form>
</div>
