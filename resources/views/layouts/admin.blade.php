
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Club Management System</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" href="{{ asset('dist/img/logo.png')}}" type="image/png" sizes="16x16">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.dataTables.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.css"> 
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-black">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      <span class="brand-text font-weight-bold">YUNIVENT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('/uploads/'.'/'.Auth::user()->profile_photo_path)}}" class="img-circle elevation-2" alt="User Image">
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
               <li class="nav-item">
                <a href="{{ url('/club-dashboard') }}" class="nav-link {{ Request::is('club-dashboard') ? 'active' : '' }}">
                  <i class="fas fa-home nav-icon text-blue"></i>
                  <p>Club Dashboard</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url('/super-dashboard') }}" class="nav-link {{ Request::is('super-dashboard') ? 'active' : '' }}">
                  <i class="fas fa-home nav-icon text-blue"></i>
                  <p>Super Admin Dashboard</p>
                </a>
              </li>
              </li>
               <li class="nav-item">
                <a href="{{ url('/student-dashboard') }}" class="nav-link {{ Request::is('student-dashboard') ? 'active' : '' }}">
                  <i class="fas fa-home nav-icon text-blue"></i>
                  <p>Student Dashboard</p>
                </a>
              </li>                            
               <li class="nav-item">
                <a href="{{ url('/management-dashboard') }}" class="nav-link {{ Request::is('management-dashboard') ? 'active' : '' }}">
                  <i class="fas fa-home nav-icon text-blue"></i>
                  <p>Management Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-users-rectangle"></i>
                  <p>
                    Club
                    <i class="fas fa-angle-left right mr-3"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/club') }}" class="nav-link {{ Request::is('club') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p>Club Management</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/club-activity') }}" class="nav-link {{ Request::is('club-activity') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p>Activity Management</p>
                    </a>
                  </li>                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-users-rectangle"></i>
                  <p>
                    Management Club
                    <i class="fas fa-angle-left right mr-3"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">              
                  <li class="nav-item">
                    <a href="{{ url('/managementclub') }}" class="nav-link {{ Request::is('managementclub') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p> Club Management</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/management-activity') }}" class="nav-link {{ Request::is('management-activity') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p> Activity Management</p>
                    </a>
                  </li>                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-users-rectangle"></i>
                  <p>
                    Admin Club
                    <i class="fas fa-angle-left right mr-3"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">              
                   <li class="nav-item">
                    <a href="{{ url('/adminclub') }}" class="nav-link {{ Request::is('adminclub') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p> Ckub Management</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/admin-activity') }}" class="nav-link {{ Request::is('admin-activity') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p> Activity Management</p>
                    </a>
                  </li>                                    
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-users-rectangle"></i>
                  <p>
                    Student Club
                    <i class="fas fa-angle-left right mr-3"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">                            
                  <li class="nav-item">
                    <a href="{{ url('/studentclub') }}" class="nav-link {{ Request::is('studentclub') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p>Club List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/student-activity') }}" class="nav-link {{ Request::is('student-activity') ? 'active' : '' }}">
                      <i class="fas fa-dumbbell nav-icon text-white"></i>
                      <p>Activity Panel</p>
                    </a>
                  </li>
                </ul>
              </li>                                         
              <li class="nav-item">
                <a href="{{ url('/vote') }}" class="nav-link {{ Request::is('vote') ? 'active' : '' }}">
                  <i class="fas fa-hand-point-up nav-icon text-warning"></i>
                  <p>Voting</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url('/proposal') }}" class="nav-link {{ Request::is('proposal') ? 'active' : '' }}">
                  <i class="fas fa-file-alt nav-icon text-success"></i>
                  <p>Proposal</p>
                </a>
              </li>
             @if (Auth::user()->user_type == '1'|| Auth::user()->user_type == '2')
               <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                  <i class="fa fa-users nav-icon text-info"></i>
                  <p>User Management</p>
                </a>
                 </li>
                @else
                <li class="nav-item">
                <a href="{{ url('/user') }}" class="nav-link {{ Request::is('user') ? 'active' : '' }}">
                  <i class="fa fa-user nav-icon text-info"></i>
                  <p>Profile</p>
                </a>
                 </li>
                @endif
             
               <li class="nav-item">
                 <form method="POST" action="{{ route('logout') }}">
                <a href="{{ route('logout') }}" class="nav-link "
                 onclick="event.preventDefault();
                  this.closest('form').submit();">
                  <i class="fa fa-power-off nav-icon text-danger"></i>
                  <p>{{ __('Logout') }}</p> @csrf
                                 
                </a>
                   </form>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-white">
    <!-- Content Header (Page header) -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Rafiah Jawahir
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020 <a href="#">UNIKL MIIT</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/jquery-clockpicker.min.js"></script>
<script type="text/javascript">
 $(document).ready(function() {
    $('.table').DataTable( {
        responsive: {
            details: {
                type: 'column',
                target: 'tr'
            }
        },
        columnDefs: [ {
            className: 'control',
            orderable: false,
            targets:   0
        } ],
        order: [ 1, 'asc' ]
    } );
    $( ".datepicker" ).datepicker({
       format: 'dd/mm/yyyy',
       autoclose: "true",
       todayHighlight: "true",
       minDate: 0,

    });
    $('.clockpicker').clockpicker({
      autoclose: true,
      'default': 'now'
    });
} );
</script>
@toastr_render
</body>
</html>
