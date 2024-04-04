@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-3">Update post</h3>
                    <form method="post" action="{{ route('posts.update', $data->id) }}" class="p-2 bg-light"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                                value="{{ $data->title }}" required autofocus>

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

                        {{-- <div class="form-group">
                            <label for="images">Image</label>
                            <input type="file" class="form-control" name="images" required>
                        </div> --}}

                        <div class="form-group">
                            <label for="message">Description</label>
                            <textarea name="description" cols="30" rows="10" class="form-control border">
                                {{ $data->description }}
                            </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update') }}
                            </button>
                            <a href="{{ route('posts.detail', $data->id) }}" class="btn btn-secondary">
                                <span class="icon-long-arrow-left"></span>
                                {{ __('Back to Post') }}
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
