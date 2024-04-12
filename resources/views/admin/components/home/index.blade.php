@extends('admin.layouts.app')

@section('content')
    <div class="row">

        @include('admin.components.posts.post')
        @include('admin.components.categories.category')
        @include('admin.components.users.user')
        @include('admin.components.admins.admin')

    </div>
@endsection
