<div class="flex items-center justify-center flex-col h-screen">
    <p>The current time is: {{ time() }}</p>
    <button class="px-4 py-2 ring-2 rounded mt-2 hover:cursor-pointer" wire:click="$refresh">Refresh</button>
</div>
