<!DOCTYPE html>
<html lang="en">

<head>
    <title>CRUD</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.shared.head')
    <style >
        .mCSB_container{
            width: 100% !important;
        }
    </style>
</head>
<!-- Menu-compact layout -->

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded" sidebar-img="false">
        <div class="pcoded-overlay-box"></div>
        @include('admin.shared.header')
        <link href="{{asset('css/home.css')}}" rel="stylesheet" />
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar" navbar-theme="theme1">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu">
                        @include('admin.shared.sidebar')
                    </div>
                </nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                @yield('dashboard')
                                <div class="page-header card">
                                    <div class="card-block">
                                        @yield('components')
                                        <ul class="p-t-10">
                                            @yield('content')
                                        </ul>
                                    </div>
                                </div>
                                <!-- Page-header end -->
                            </div>
                        </div>
                        <!-- Main-body end -->
                        <div id="styleSelector" style="visibility: hidden">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.shared.scripts')
    @stack('functions')
</body>

</html>
