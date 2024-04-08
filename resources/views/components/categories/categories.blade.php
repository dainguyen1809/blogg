@extends('layouts.app')

@section('content')
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">{{ __('Category') }}&colon; {{ $name }}</div>
                </div>
            </div>
            <div class="row posts-entry">
                <div class="col-lg-8">
                    @foreach ($data as $category)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <a href="{{ route('posts.detail', $category->id) }}" class="img-link me-4">
                                <img src="{{ asset('assets/images/' . $category->images . '') }}" alt="Image"
                                    class="img-fluid">
                            </a>
                            <div>
                                <span class="date">{{ $category->created_at->format('d-m-Y') }} &bullet; <a
                                        href="#">{{ $category->category }}</a></span>
                                <h2><a href="{{ route('posts.detail', $category->id) }}">{{ $category->title }}</a></h2>
                                <p>{{ Str::limit($category->description, 100) }}</p>
                                <p><a href="{{ route('posts.detail', $category->id) }}"
                                        class="btn btn-sm btn-outline-primary">{{ __('Read More') }}</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="col-lg-4 sidebar">


                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        @include('components.posts.popular')
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        @include('components.posts.category')
                    </div>
                    <!-- END sidebar-box -->




                </div>
            </div>
        </div>
    </div>
@endsection
