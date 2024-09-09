<tr @class(['bg-slate-700', 'bg-slate-500' => $post->is_archived])>
    <th class="px-2 py-1">
        {{ $post->title }}
        @if ($post->is_archived)
            <small>
                [archived]
            </small>
        @endif
    </th>
    <th class="px-2 py-1">{{ $post->content }}</th>
    <th class="flex justify-end mt-0.5 gap-x-2">
        @unless ($post->is_archived)
            <button wire:click="archive()" wire:confirm="Are you sure?"
                class="px-2 transition-colors bg-green-500 rounded hover:cursor-pointer active:bg-green-700" type="button">
                Archive
            </button>
        @else
            <button wire:click="recover()" wire:confirm="Are you sure?"
                class="px-2 transition-colors bg-gray-500 rounded hover:cursor-pointer active:bg-gray-700" type="button">
                Recover
            </button>
        @endunless
        <button wire:click="$parent.delete({{ $post->id }})" wire:confirm="Are you sure?"
            class="px-2 transition-colors bg-red-500 rounded hover:cursor-pointer active:bg-red-700" type="button">
            Delete
        </button>
    </th>
</tr>
