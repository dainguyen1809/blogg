<section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-uppercase text-black">More Blog Posts</div>
        </div>
        <div class="row">
            @foreach ($others as $post)
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="{{ route('posts.detail', $post->id) }}" class="img-link">
                            <img src="{{ asset('assets/images/' . $post->images . '') }}" alt="Image"
                                class="img-fluid" />
                        </a>
                        <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                        <h2>
                            <a href="{{ route('posts.detail', $post->id) }}">{{ Str::limit($post->title, 50) }}</a>
                        </h2>
                        <p>{{ Str::limit($post->description, 70) }}</p>
                        <p><a href="{{ route('posts.detail', $post->id) }}" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
            @endforeach
        </div>
</section>
