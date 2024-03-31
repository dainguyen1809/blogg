<!-- Start posts-entry -->
<section class="section posts-entry posts-entry-sm bg-light">
    <div class="container">
        <div class="row">
            @foreach ($randPost as $post)
            <div class="col-md-6 col-lg-3">
                <div class="blog-entry">
                    <a href="{{ route('posts.detail', $post->id) }}" class="img-link">
                        <img src="{{ asset('assets/images/' . $post->images . '') }}" alt="Image" class="img-fluid">
                    </a>
                    <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                    <h2><a href="{{ route('posts.detail', $post->id) }}">{{ $post->title }}</a></h2>
                    <p>{{ Str::limit($post->description, 50) }}</p>
                    <p><a href="{{ route('posts.detail', $post->id) }}" class="read-more">Continue Reading</a></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End posts-entry -->
