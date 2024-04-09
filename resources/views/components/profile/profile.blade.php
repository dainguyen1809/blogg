@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('About Author') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="bio-body mx-auto d-blog">
                            {{-- @dd($user->avatar) --}}
                            <img class="rounded-circle mx-auto d-block w-25"
                                src="{{ asset('client/images/users/' . $profile->avatar . '') }}" alt="">


                            <div class="mt-3 text-center">
                                <h2>{{ $profile->name }}</h2>
                                <p class="mb-4">
                                    {{ $profile->bio }}
                                </p>
                            </div>

                            <div class="d-flex">
                                <div class="col-6">

                                    <h4>Hi&excl; <span class="text-info">{{ $profile->name }}</span></h4>
                                    <p class="social fs-5">

                                        {{-- <a href="#" class="p-2"><span class="icon-instagram"></span></a> --}}
                                        <a href="{{ $profile->link }}" target="_blank" class="p-2">
                                            <span class="text-info">{{ __('Link social') }}</span>
                                            <span class="icon-facebook"></span>
                                            </>
                                    </p>
                                </div>

                                <div class="col-6">

                                    <h4 class="">Fullname: <span class="text-info">{{ $profile->name }}</span>
                                    </h4>
                                    <h4 class="">Email: <a href="mailto:{{ $profile->email }}">
                                            <span class="text-info">
                                                {{ $profile->email }}</span>
                                        </a>
                                    </h4>
                                </div>
                            </div>

                            <div class="mt-3 active">
                                <a class="btn btn-outline-primary" href="#">{{ __('All posts') }} <span
                                        class="icon-file"></span> </a>

                                <a class="btn btn-outline-primary" href="{{ route('posts.index') }}">
                                    <span class="icon-long-arrow-left"></span>
                                    {{ __('Back to Post') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
