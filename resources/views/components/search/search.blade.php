@extends('layouts.app')

@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">{{ __('Result') }}</div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach ($result as $post)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="{{ route('posts.detail', $post->id) }}" class="img-link me-4">
                                <img src="{{ asset('client/images/' . $post->images . '') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <div>
                                <span class="date">{{ $post->created_at->format('d-m-Y') }} &bullet; <a
                                        href="#">{{ $post->post }}</a></span>
                                <h2><a href="{{ route('posts.detail', $post->id) }}">{{ $post->title }}</a></h2>
                                <p>{{ Str::limit($post->description, 100) }}</p>
                                <p><a href="{{ route('posts.detail', $post->id) }}"
                                        class="btn btn-sm btn-outline-primary">{{ __('Read More') }}</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
