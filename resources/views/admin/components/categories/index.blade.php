@extends('admin.layouts.app')

@section('content')
    <h1 class="text-info">List of {{ $title }}</h1>
    <table class="table table-bordered table-centered mb-0">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Created At') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->created_at->format('d/m/Y') }}</td>
                    <td class="table-action">
                        <a href="javascript: void(0);" class="action-icon"> <i class="text-warning mdi mdi-pencil"></i></a>
                        <a href="javascript: void(0);" class="action-icon"> <i class="text-danger mdi mdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
