@extends('layouts.app')

@section('content')
    @include('components.posts.hero')
    @include('components.posts.business')
    @include('components.posts.random')
    @include('components.posts.culture')
    @include('components.posts.travel')
@endsection()
