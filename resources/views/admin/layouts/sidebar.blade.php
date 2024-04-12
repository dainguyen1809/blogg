<div class="left-side-menu left-side-menu-detached">
    <div class="leftbar-user">
        <a href="#">
            <img src="{{ asset('backend/images/users/' . Auth::guard('admin')->user()->avatar . '') }}"
                class="rounded-circle w-25" />
            <span class="leftbar-user-name">{{ Auth::guard('admin')->user()->name }}</span>
        </a>
    </div>

    <!--- Sidemenu -->
    <ul class="metismenu side-nav">
        <li class="side-nav-title side-nav-item">{{ __('Manage') }}</li>

        <li class="side-nav-item">
            <a href="{{ route('admin.dashboard') }}" class="side-nav-link">
                <i class="uil-home-alt"></i>
                <span> {{ __('Dashboards') }} </span>
            </a>
            <a href="{{ route('admin.list') }}" class="side-nav-link">
                <i class="uil-user-circle"></i>
                <span> {{ __('Admin') }} </span>
            </a>
            <a href="{{ route('admin.users') }}" class="side-nav-link">
                <i class="uil-user"></i>
                <span> {{ __('Users') }} </span>
            </a>
            <a href="{{ route('admin.categories') }}" class="side-nav-link">
                <i class="uil-apps"></i>
                <span> {{ __('Categories') }} </span>
            </a>
            <a href="{{ route('admin.posts') }}" class="side-nav-link">
                <i class="uil-file-alt"></i>
                <span> {{ __('Posts') }} </span>
            </a>
        </li>

    </ul>

    <!-- End Sidebar -->

    <div class="clearfix"></div>
    <!-- Sidebar -left -->
</div>
