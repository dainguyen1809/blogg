@extends('admin.layouts.app')
@section('content')
    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header text-center bg-primary">
                            <h3 class="text-white">Administrator</h3>
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">{{ __('Sign In') }}</h4>
                                <p class="text-muted mb-4">
                                    {{ __('Enter your email address and password to access admin panel.') }}
                                </p>
                            </div>

                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    <span class="text-danger">{{ Session::get('error') }}</span>
                                </div>
                            @endif

                            <form action="{{ route('admin.check.login') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="emailaddress">Email</label>
                                    <input class="form-control" type="email" name="email" id="emailaddress"
                                        required="" placeholder="Enter your email" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <a href="pages-recoverpw.html" class="text-muted float-right"><small>Forgot your
                                            password?</small></a>
                                    <label for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="Enter your password">
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-0 text-center">
                                    <button class="btn btn-primary" type="submit"> {{ __('Log In') }} </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
@endsection
