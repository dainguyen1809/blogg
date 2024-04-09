<div class="post-entry-sidebar">
    <h3 class="heading">Popular Posts</h3>
    <ul>
        @foreach ($popularPost as $post)
            <li>
                <a href="{{ route('posts.detail', $post->id) }}">
                    <img src="{{ asset('client/images/' . $post->images . '') }}" alt="Image placeholder"
                        class="me-4 rounded" />
                    <div class="text">
                        <h4>
                            {{ Str::limit($post->title, 30) }}
                        </h4>
                        <div class="post-meta">
                            <span class="mr-2">{{ $post->created_at->format('d/m/Y') }} </span>
                        </div>
                    </div>
                </a>
            </li>
        @endforeach()
    </ul>
</div>
