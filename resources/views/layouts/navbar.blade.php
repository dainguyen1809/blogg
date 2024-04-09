<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <a href="{{ url('/') }}" class="logo m-0 float-start">Blogy<span
                                class="text-primary">.</span></a>
                    </div>

                    <div class="col-8 text-center">
                        <form action="#" class="search-form d-inline-block d-lg-none">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>

                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li class="active"><a href="{{ route('posts.index') }}">Home</a></li>
                            <li class="has-children active">
                                <a href="#">{{ __('Categories') }}</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('category', 'Culture') }}">Culture</a></li>
                                    <li><a href="{{ route('category', 'Business') }}">Business</a></li>
                                    <li><a href="{{ route('category', 'Politics') }}">Politics</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ route('pages.contact') }}">Contact</a></li>
                            <li><a href="{{ route('pages.about') }}">About</a></li>
                            @guest
                                @if (Route::has('login'))
                                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                @endif
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                @endif
                            @else
                                <li class="nav-item dropdown">

                                    <a id="navbarDropdown d-flex justify-content-center" class="nav-link dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" v-pre>
                                        <img class="rounded-circle" style="width: 22px"
                                            src="{{ asset('client/images/users/' . Auth::user()->avatar . '') }}"
                                            alt="">
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="{{ route('user.profile', Auth::user()->id) }}">
                                            {{ __('Profile') }}
                                        </a>

                                    </div>
                                </li>
                            @endguest
                        </ul>

                    </div>
                    <div class="col-2 text-end">
                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                        <form action="{{ route('posts.search') }}" method="post"
                            class="search-form d-none d-lg-inline-block">
                            @csrf
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="bi-search"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
