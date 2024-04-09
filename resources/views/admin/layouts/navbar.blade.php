<div class="navbar-custom topnav-navbar topnav-navbar-dark">
    <div class="container-fluid">
        <ul class="list-unstyled topbar-right-menu float-right mb-0">
            <li class="dropdown notification-list d-lg-none">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                    aria-haspopup="false" aria-expanded="false">
                    <i class="dripicons-search noti-icon"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                    <form class="p-3">
                        <input type="text" class="form-control" placeholder="Search ..."
                            aria-label="Recipient's username" />
                    </form>
                </div>
            </li>

            <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" id="topbar-languagedrop"
                    href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ asset('backend/images/flags/us.svg') }}" alt="user-image" class="mr-1"
                        height="18" />
                    <span class="align-middle">English</span>
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu"
                    aria-labelledby="topbar-languagedrop">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{ asset('backend/images/flags/vn.svg') }}" alt="user-image" class="mr-1"
                            height="18" />
                        <span class="align-middle">Tiếng Việt</span>
                    </a>
                </div>
            </li>

            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" id="topbar-userdrop"
                    href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <span class="account-user-avatar">
                        <img src="{{ asset('backend/images/users/' . Auth::guard('admin')->user()->avatar . '') }}"
                            alt="user-image" class="rounded-circle" />
                    </span>
                    <span>
                        <span class="account-user-name">{{ Auth::guard('admin')->user()->name }}</span>
                        <span class="account-position">{{ Auth::guard('admin')->user()->position }}</span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a class="dropdown-item" href="#">
                        {{ __('Profile') }}
                    </a>

                </div>
            </li>
        </ul>
        <a class="button-menu-mobile disable-btn">
            <div class="lines">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
    </div>
</div>
