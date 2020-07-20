
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jijenge Investments</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="hold-transition layout-fixed layout-navbar-fixed layout-top-nav">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white elevation-1">
        <div class="container-fluid">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="/img/logo.png" alt="Jijenge Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
            </a>

            <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">Home</a>
                    </li>
                </ul>

            </div>

            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <img src="/img/profile.png" alt="Logo" class="brand-image img-circle elevation-1" style="opacity: .8">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" style="left: inherit; right: 0px;">
                        <!-- user avatar -->
                        <a href="#" class="dropdown-item">
                            <img src="/img/profile.png" alt="Logo" class="brand-image img-circle elevation-1"
                                 style="opacity: .8">
                            <span class="brand-text font-weight-light">{{ Auth::user()->name }}</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item dropdown-footer" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off mr-2"></i> logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container">
                @yield('content')
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="#">Jijenge Investments</a>.</strong> All rights reserved.
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="/js/app.js"></script>
<script src="/js/admin.js"></script>
</body>
</html>

