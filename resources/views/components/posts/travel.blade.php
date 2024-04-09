<div class="section bg-light">
    <div class="container">

        <div class="row mb-4">
            <div class="col-sm-6">
                <h2 class="posts-entry-title">Travel</h2>
            </div>
            <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
        </div>

        <div class="row align-items-stretch retro-layout-alt">

            @foreach ($travelPost as $post)
                <div class="col-md-5 order-md-2">
                    <a href="{{ route('posts.detail', $post->id) }}" class="hentry img-1 h-100 gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('client/images/' . $post->images . '') }}');"></div>
                        <div class="text">
                            <span>{{ $post->created_at->format('d-m-Y') }}</span>
                            <h2>{{ $post->title }}</h2>
                        </div>
                    </a>
                </div>
            @endforeach

            <div class="col-md-7">

                @foreach ($travelPost_cover as $post)
                    <a href="{{ route('posts.detail', $post->id) }}" class="hentry img-2 v-height mb30 gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('client/images/' . $post->images . '') }}');"></div>
                        <div class="text text-sm">
                            <span>{{ $post->created_at->format('d-m-Y') }}</span>
                            <h2>{{ $post->title }}</h2>
                        </div>
                    </a>
                @endforeach

                <div class="two-col d-block d-md-flex justify-content-between">
                    @foreach ($travelPost_under as $post)
                        <a href="{{ route('posts.detail', $post->id) }}"
                            class="hentry v-height img-2 ms-auto float-end gradient">
                            <div class="featured-img"
                                style="background-image: url('{{ asset('client/images/' . $post->images . '') }}');">
                            </div>
                            <div class="text text-sm">
                                <span>{{ $post->created_at->format('d-m-Y') }}</span>
                                <h2>{{ $post->title }}</h2>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</div>
