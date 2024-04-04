@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Page Profile') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="bio-body mx-auto d-blog">
                            <img class="rounded-circle mx-auto d-block w-25"
                                src="{{ asset('assets/images/users/' . Auth::user()->avatar . '') }}" alt="">

                            <div class="mt-3 text-center">
                                <h2>{{ Auth::user()->name }}</h2>
                                <p class="mb-4">
                                    {{ Auth::user()->bio }}
                                </p>
                            </div>

                            <div class="d-flex">
                                <div class="col-6">

                                    <h4 class="">Hi&excl; <span class="text-info">{{ Auth::user()->name }}</span></h4>
                                    <p class="social fs-5">

                                        {{-- <a href="#" class="p-2"><span class="icon-instagram"></span></a> --}}
                                        <a href="{{ Auth::user()->link }}" target="_blank" class="p-2">
                                            <span class="text-info">{{ __('Link social') }}</span>
                                            <span class="icon-facebook"></span>
                                        </a>
                                    </p>
                                </div>

                                <div class="col-6">

                                    <h4 class="">Fullname: <span class="text-info">{{ Auth::user()->name }}</span>
                                    </h4>
                                    <h4 class="">Email: <a href="mailto:{{ Auth::user()->email }}">
                                            <span class="text-info">
                                                {{ Auth::user()->email }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>

                            <div class="mt-3 active">
                                <a class="btn btn-primary" href="#">{{ __('Edit profile') }} <span
                                        class="icon-pencil"></span> </a>
                                <a class="btn btn-outline-primary" href="#">{{ __('All your posts') }} <span
                                        class="icon-file"></span> </a>

                                <a class="btn btn-outline-primary"
                                    href="{{ route('posts.create') }}">{{ __('Create Post') }} <span
                                        class="icon-pencil"></span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
