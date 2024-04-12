@extends('admin.layouts.app')

@section('content')
    <h1 class="text-info">List of {{ $title }}</h1>
    <table class="table table-bordered table-centered mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Bio') }}</th>
                <th>Email</th>
                <th>Link</th>
                <th>{{ __('Created At') }}</th>
                <th class="text-center">{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td class="table-user">
                        <img src="{{ asset('client/images/users/' . $user->avatar . '') }}" alt="table-user"
                            class="mr-2 rounded-circle" />
                        {{ $user->name }}
                    </td>
                    <td>{{ $user->bio }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ $user->link }}" target="_blank">{{ $user->link }}</a>
                    </td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>

                    <td class="table-action text-center">
                        <a href="javascript: void(0);" class="action-icon"> <i class="text-danger mdi mdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
