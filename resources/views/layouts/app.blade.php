<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;600;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('client/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('client/fonts/flaticon/font/flaticon.css') }}">

    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="{{ asset('client/css/tiny-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/glightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('client/css/flatpickr.min.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        @include('layouts.navbar')

        <main>
            @yield('content')
        </main>

        @include('layouts.footer')

    </div>


    <script src="{{ asset('client/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('client/js/tiny-slider.js') }}"></script>

    <script src="{{ asset('client/js/flatpickr.min.js') }}"></script>


    <script src="{{ asset('client/js/aos.js') }}"></script>
    <script src="{{ asset('client/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('client/js/navbar.js') }}"></script>
    <script src="{{ asset('client/js/counter.js') }}"></script>
    <script src="{{ asset('client/js/custom.js') }}"></script>



</body>

</html>
