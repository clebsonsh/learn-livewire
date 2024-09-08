<div class="flex items-center gap-x-4 p-4">
    <button class="px-3 py-1 ring-2 rounded hover:cursor-pointer bg-black/90 active:bg-black/50 transition-colors"
        wire:click="decrement">-</button>
    <p>Count: {{ $count }}</p>
    <button class="px-3 py-1 ring-2 rounded hover:cursor-pointer bg-black/90 active:bg-black/50 transition-colors"
        wire:click="increment(2)">+</button>
</div>
