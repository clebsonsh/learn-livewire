<div class="p-4 space-y-4">
    <h2 class="text-xl">Posts:</h2>

    <div>
        <a href="/posts/create" class="px-3 py-1 rounded hover:cursor-pointer ring-1">
            New post
        </a>
    </div>

    @if (count($posts))
        <table class="text-left mb-4">
            <thead>
                <tr class="bg-slate-900">
                    <th class="px-2 py-1">Title</th>
                    <th class="px-2 py-1">Content</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr wire:key="{{ $post->id }}" class="bg-slate-700">
                        <th class="px-2 py-1">{{ $post->title }}</th>
                        <th class="px-2 py-1">{{ $post->content }}</th>
                        <th>
                            <button wire:click="delete({{ $post->id }})" wire:confirm="Are you sure?"
                                class="px-2 rounded hover:cursor-pointer bg-red-500 active:bg-red-700 transition-colors"
                                type="button">
                                Delete
                            </button>
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    @else
        <p>
            There are not posts yet
        </p>
    @endif
</div>
