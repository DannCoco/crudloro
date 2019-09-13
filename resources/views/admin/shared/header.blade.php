<div class="pcoded-container navbar-wrapper">
    <nav class="navbar header-navbar pcoded-header">
        <div class="navbar-wrapper">
            <div class="navbar-logo">
                <a class="mobile-menu hover-menu" id="mobile-collapse" href="#!">
                    <i class="ti-menu"></i>
                </a>
            <div class="mobile-search">
                <div class="header-search">
                    <div class="main-search morphsearch-search">
                        <div class="input-group">
                            <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                <input type="text" class="form-control" placeholder="Enter Keyword">
                                    <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('home') }}">
                <img class="img-fluid" src="{{ asset('GradientAble/files/assets/images/logo.png') }}"  alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="ti-more"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-right">
                <li class="header-notification">
                    <a>
                        <i class="ti-bell"></i>
                        <span class="badge bg-c-pink"></span>
                    </a>
                    <ul class="show-notification">
                    </ul>
                </li>
                <li class="user-profile header-notification">
                    <a>
                        <img src="{{ asset('GradientAble/files/assets/images/avatar-4.jpg') }}"  class="img-radius" alt="User-Profile-Image">
                        @if(Auth::check())
                            <span>{{ Auth::user()->name }}</span>
                            <i class="ti-angle-down"></i>
                        @endif
                    </a>
                    <ul class="show-notification profile-notification">
                        <li>
                            <a href="{{ url('/logout') }}">
                                <i class="ti-layout-sidebar-left"></i> Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
