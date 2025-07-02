<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guru | Dashboard</title>
    <link rel="icon" type="image/png" href="img/logosd.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('/') }}img/logosd.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('/') }}img/logosd.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">SDIT AL - IHSAN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('/') }}assets/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>
                <script>
                  document.addEventListener("DOMContentLoaded", function () {
                    const token = localStorage.getItem('token');
                    const infoLink = document.querySelector('.info a.d-block');

                    if (!token || !infoLink) return;

                    axios.get('http://127.0.0.1:8000/api/admin/profile', {
                      headers: {
                        'Authorization': 'Bearer ' + token
                      }
                    })
                    .then(response => {
                      const name = response.data.name;
                      infoLink.textContent = name;
                    })
                    .catch(error => {
                      console.error('Gagal mengambil data profil:', error);
                    });
                  });
                </script>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/guru" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                Akademik Siswa
                                <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                <a href="/guru/data-siswa" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Siswa</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/guru/data-nilai-siswa" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Nilai Siswa</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/guru/data-kelas" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Kelas</p>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/guru/data-jadwal" class="nav-link">
                                <i class="nav-icon fas fa-calendar"></i>
                                <p>
                                Jadwal Pelajaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/guru/mata-pelajaran" class="nav-link">
                                <i class="nav-icon fas fa-book-open"></i>
                                <p>
                                Mata Pelajaran
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#" onclick="logout()" class="nav-link">
                                <!-- <i class="nav-icon fas fa-"></i> -->
                                <i class="nav-icon fas fa-arrow-left"></i>
                                <p>
                                Logout
                                </p>
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
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                            <h3>150</h3>

                            <p>User</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-person"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                            <h3>53</h3>

                            <p>Siswa</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                            <h3>44</h3>

                            <p>Calon Siswa</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                            <h3>65</h3>

                            <p>Guru</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; <a href="#">RevanRach</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
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
    <script src="{{ asset('/') }}assets/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('/') }}assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script> -->
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('/') }}assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('/') }}assets/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('/') }}assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('/') }}assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('/') }}assets/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('/') }}assets/plugins/moment/moment.min.js"></script>
    <script src="{{ asset('/') }}assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('/') }}assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('/') }}assets/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('/') }}assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/') }}assets/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes
    <script src="{{ asset('/') }}assets/dist/js/demo.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</body>
</html>
