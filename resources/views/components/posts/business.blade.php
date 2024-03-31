    <!-- Start posts-entry -->
    <section class="section posts-entry">
        <div class="container">
            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Business</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-9">
                    <div class="row g-3">
                        @foreach ($businessPost as $post)
                            <div class="col-md-6">
                                <div class="blog-entry">
                                    <a href="{{ route('posts.detail', $post->id) }}" class="img-link">
                                        <img src="{{ asset('assets/images/' . $post->images . '') }}" alt="Image"
                                            class="img-fluid">
                                    </a>
                                    <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                                    <h2><a href="{{ route('posts.detail', $post->id) }}">{{ $post->title }}</a></h2>
                                    <p>{{ Str::limit($post->description, 200) }}</p>
                                    <p><a href="{{ route('posts.detail', $post->id) }}"
                                            class="btn btn-sm btn-outline-primary">Read
                                            More</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled blog-entry-sm">
                        @foreach ($sideBus as $post)
                            <li>
                                <span class="date">{{ $post->created_at->format('d-m-Y') }}</span>
                                <h3><a href="{{ route('posts.detail', $post->id) }}">{{ $post->title }}</a></h3>
                                <p>{{ Str::limit($post->description, 100) }}</p>
                                <p><a href="{{ route('posts.detail', $post->id) }}" class="read-more">Continue Reading</a>
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End posts-entry -->
