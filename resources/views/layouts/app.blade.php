
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Buy-Sell Admin</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- Favicon --}}
  <link rel="shortcut icon" type="image/png" href=" {{ asset('/images/buysell-logo.png') }} ">

  <!-- Font Awesome -->
{{-- <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="{{asset('css/tempus-bootstrap.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('css/icheck.min.css')}}">
  <!-- Tailwind css -->
  <link rel="stylesheet" href="/css/main.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('css/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
<link rel="stylesheet" href="{{asset('css/overlay.min.css')}}">
  <!-- Daterange picker -->
<link rel="stylesheet" href="{{asset('css/daterangepicker.css')}}">
  <!-- summernote -->
<link rel="stylesheet" href="{{asset('css/summernote.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">User Actions</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="far fa-user"></i>
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            {{ __('Logout') }}
          </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        </div>
        {{-- <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i>
            <span class="float-right text-muted text-sm">3 mins</span>
          </a> --}}
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}

      <span class="brand-text font-weight-light">Buy-sell</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
          {{-- <span>User Image</span> --}}
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a href="{{route('faq.index')}}" class="nav-link">
            <i class="far fa-comment-alt nav-icon"></i>
            <p>Faq</p>
          </a>
          </li>
          <li class="nav-item">
          <a href="{{ route('about-us.index') }}" class="nav-link">
              <i class="fas fa-info-circle nav-icon"></i>
              <p>About Us</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tags.index') }}" class="nav-link">
                <i class="fas fa-info-circle nav-icon"></i>
                <p>Tags</p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{route('news.index')}}" class="nav-link">
              <i class="far fa-comment-alt nav-icon"></i>
              <p>News</p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- /.row -->
        <!-- Main row -->
        @yield('content')

        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('js/chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('js/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('js/jquery-vmap.min.js')}}"></script>
<script src="{{asset('js/jquery-vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/datepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('js/tempus-bootstrap.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('js/summernote.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('js/scrollbar.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('js/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
</body>
@stack('scripts')
</html>
