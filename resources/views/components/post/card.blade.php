
<x-card>
    <x-card-body>
        <div class="my-4">
            <h2 class="h5">
                <a href="{{ route('blog.show', $post->id) }}">
                    {{ $post->title }}
                </a>
            </h2>
            
            <div class="small text-muted">
                {{ $post->published_at->diffForHumans() }}
            </div>

        </div>
    </x-card-body>
</x-card>