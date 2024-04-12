@extends('admin.layouts.app')

@section('content')
    <h1 class="text-info">List of {{ $title }}</h1>
    <table class="table table-bordered table-centered mb-0">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>{{ __('Title') }}</th>
                <th>{{ __('Images') }}</th>
                <th>{{ __('Description') }}</th>
                <th>{{ __('Category') }}</th>
                <th>{{ __('Author') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>
                        <img class="mw-100" src="{{ asset('client/images/' . $post->images . '') }}" alt="">
                    </td>
                    <td>
                        <p>{{ Str::limit($post->description, 250) }}</p>
                    </td>
                    <td>{{ $post->category }}</td>
                    <td>
                        <p class="text-info">
                            {{ $post->user_name }}
                        </p>
                    </td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                    <td class="table-action">
                        <a href="javascript: void(0);" class="action-icon"> <i class="text-warning mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="text-danger mdi mdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
