@extends('admin.layouts.app')

@section('content')
    <h1 class="text-info">{{ $title }}</h1>
    <div class="row align-items-center justify-content-end mb-4">
        <a href="{{ route('admin.create-admin') }}" class="btn btn-primary">
            <span class="uil-user-plus"></span>
            {{ __('Create a new admin') }}
        </a>
    </div>
    <table class="table table-bordered table-centered mb-0">
        <thead>
            <tr>
                <th>#</th>
                <th>{{ __('Name') }}</th>
                <th>Email</th>
                <th>{{ __('Position') }}</th>
                <th class="text-center">{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->id }}</td>
                    <td class="table-admin">
                        <img src="{{ asset('backend/images/users/' . $admin->avatar . '') }}" alt="table-admin"
                            class="mr-2 rounded-circle" height="80" />
                        {{ $admin->name }}
                    </td>
                    <td>{{ $admin->email }}</td>
                    <td>{{ $admin->position }}</td>
                    <td>{{ $admin->getCustomRoles() }}</td>

                    <td class="table-action text-center">
                        <a href="javascript: void(0);" class="action-icon"> <i class="text-danger mdi mdi-delete"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
