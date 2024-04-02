@extends('layouts.app')

@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ asset('assets/images/' . $data->images . '') }}')">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h2 class="mb-4">
                            {{ $data->title }}
                        </h2>
                        <div class="post-meta align-items-center text-center">
                            <figure class="author-figure mb-0 me-3 d-inline-block">
                                <img src="{{ asset('assets/images/users/' . $user->avatar . '') }}" alt="Image"
                                    class="img-fluid" />
                            </figure>
                            <span class="d-inline-block mt-1">{{ $data->user_name }}</span>
                            <span>Posted in {{ $data->created_at->format('d/m/Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container">
            <div class="row blog-entries element-animate">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="post-content-body">
                        <p>{!! nl2br(e($data->description)) !!}</p>
                    </div>

                    <div class="pt-5">
                        <p>Categories: <a href="#">{{ $data->category }}</a></p>
                    </div>


                    @include('components.comment.comment')

                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <div class="bio text-center">
                            <img src="{{ asset('assets/images/users/' . $user->avatar . '') }}" alt="Image Placeholder"
                                class="img-fluid mb-3" />
                            <div class="bio-body">
                                <h2>{{ $user->name }}</h2>
                                <p class="mb-4">
                                    {{ $user->bio }}
                                </p>
                                <p>
                                    <a href="#" class="btn btn-primary btn-sm rounded px-2 py-2">About author</a>
                                </p>
                                {{-- <p class="social">
                                    <a href="https://instagram.com/dainguyen.dhn/" class="p-2"><span class="icon-instagram"></span></a>
                                    <a href="#" class="p-2"><span class="icon-facebook"></span></a>
                                </p> --}}
                            </div>
                        </div>
                    </div>
                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        @include('components.posts.popular')
                    </div>
                    <!-- END sidebar-box -->

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        @include('components.posts.category')
                    </div>
                    <!-- END sidebar-box -->
                </div>
                <!-- END sidebar -->
            </div>
        </div>
    </section>

    @include('components.posts.other')
@endsection
