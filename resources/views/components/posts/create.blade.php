@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-3">Create a new post</h3>
                    <form method="post" action="{{ route('posts.store') }}" class="p-2 bg-light" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                value="{{ old('title') }}" required autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <select name="category" class="form-select" aria-label="Default select example">
                            @foreach ($categories as $category)
                                <option value="{{ $category->name }}">{{ $category->name }}</option>
                            @endforeach()
                        </select>

                        <div class="form-group">
                            <label for="images">Image</label>
                            <input type="file" class="form-control" name="images" required>
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control" name="user_name" value="{{ Auth::user()->id }}"
                                required readonly>
                        </div>

                        <div class="form-group">
                            <label for="email">User Name</label>
                            <input type="text" class="form-control" name="user_name" value="{{ Auth::user()->name }}"
                                required readonly>
                        </div>

                        <div class="form-group">
                            <label for="message">Description</label>
                            <textarea name="description" cols="30" rows="10" class="form-control border"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Upload') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
