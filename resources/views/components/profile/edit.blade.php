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
                        <form method="post" action="{{ route('user.update', $user->id) }}" class="p-2 bg-light"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="bio-body mx-auto d-blog">
                                <input type="file" class="form-control" name="avatar">

                                <label for="avatar">{{ __('Old Avatar') }}</label>
                                <img class="rounded-circle mx-auto d-block w-25"
                                    src="{{ asset('client/images/users/' . $user->avatar . '') }}" alt="">

                                <div class="mt-3 col-6 mx-auto">
                                    <div class="form-group">
                                        <label for="name">Fullname</label>
                                        <input type="text" class="form-control" name="name"
                                            value="{{ $user->name }}">
                                    </div>
                                    <div class="form-group">
                                        <p class="mb-4">
                                            <label for="bio">Bio</label>
                                            <input type="text" class="form-control" name="bio"
                                                value="{{ $user->bio }}">
                                        </p>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col">
                                        <label for="bio">Facebook Link</label>
                                        <input type="text" class="form-control" name="link"
                                            value="{{ $user->link }}">
                                    </div>

                                    <div class="col">
                                        <label for="bio">Email</label>
                                        <input type="text" class="form-control" name="email"
                                            value="{{ $user->email }}">
                                    </div>
                                </div>

                                <div class="mt-3 active">
                                    <a class="btn btn-outline-info" href="{{ route('user.profile', $user->id) }}">
                                        <span class="icon-long-arrow-left"></span>
                                        {{ __('Back to your profile') }}
                                    </a>
                                    <button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
