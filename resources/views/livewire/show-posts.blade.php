<div class="p-4 space-y-4">
    <h2 class="text-xl">Posts:</h2>

    <div>
        <a href="/posts/create" class="px-3 py-1 rounded hover:cursor-pointer ring-1">
            New post
        </a>
    </div>

    @if (count($posts))
        <table class="mb-4 text-left">
            <thead>
                <tr class="bg-slate-900">
                    <th class="px-2 py-1">Title</th>
                    <th class="px-2 py-1">Content</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <livewire:post-row :key="$post->id" :post="$post" />
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
