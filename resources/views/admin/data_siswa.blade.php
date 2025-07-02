<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Data Siswa</title>
  <link rel="icon" type="image/png" href="img/logosd.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/') }}assets/dist/css/adminlte.min.css">
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
                            <a href="/admin" class="nav-link">
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
                                Daftar Users
                                <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                <a href="/data-user" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Users</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/data-siswa" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Siswa</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/data-guru" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Guru</p>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                Data Akademik
                                <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                <a href="/data-kelas" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Kelas</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/data-mapel" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Mata Pelajaran</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/data-jadwal" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Jadwal Pelajaran</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/data-nilai" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Nilai Siswa</p>
                                </a>
                                </li>
                                <li class="nav-item">
                                <a href="/data-absensi" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Data Absensi Siswa</p>
                                </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/data-calon-siswa" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                Daftar Calon Siswa
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data-transaksi" class="nav-link">
                                <i class="nav-icon fas fa-file-signature"></i>
                                <p>
                                Transaksi Pendaftaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/data-spp-siswa" class="nav-link">
                                <i class="nav-icon fas fa-wallet"></i>
                                <p>
                                Pembayaran SPP
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-primary btn-block col-md-2" data-toggle="modal" data-target="#addUserModal">
                  <i class="fa fa-plus"></i> Tambah Siswa
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="dataTable">
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nis</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Kelas</th>
                        <th>Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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

    <!-- Modal Tambah Siswa -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="addUserForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Tambah Siswa Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_lengkap" required>
              </div>
              <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input type="text" class="form-control" id="nis" required>
                <small class="form-text text-muted">*Maksimal 10 digit</small>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" required>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="Agama" class="form-label">Agama</label>
                <select class="form-control" id="agama" required>
                  <option value="Islam">Islam</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" required>
              </div>
              <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea id="alamat" class="form-control" required></textarea>
              </div>
              <div class="mb-3">
                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" required>
              </div>
              <div class="mb-3">
                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" required>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Modal Detail Siswa -->
    <div class="modal fade" id="detailUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="editUserForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Detail Data Siswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_lengkap" required>
              </div>
              <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input type="number" class="form-control" id="nis" required>
                <small class="form-text text-muted">*Maksimal 10 digit</small>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" required>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="Agama" class="form-label">Agama</label>
                <select class="form-control" id="agama" required>
                  <option value="Islam">Islam</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" required>
              </div>
              <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea id="alamat" class="form-control" required></textarea>
              </div>
              <div class="mb-3">
                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" required>
              </div>
              <div class="mb-3">
                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" required>
              </div>
              <div class="mb-3">
                <label for="rt" class="form-label">RT</label>
                <input type="text" class="form-control" id="rt">
              </div>
              <div class="mb-3">
                <label for="rw" class="form-label">RW</label>
                <input type="text" class="form-control" id="rw">
              </div>
              <div class="mb-3">
                <label for="kelurahan" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="kelurahan">
              </div>
              <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan">
              </div>
              <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota">
              </div>
              <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="provinsi">
              </div>
              <div class="mb-3">
                <label for="kode_pos" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos">
              </div>
              <div class="mb-3">
                <label for="no_handphone" class="form-label">No. Handphone</label>
                <input type="text" class="form-control" id="no_handphone">
              </div>
              <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="text" class="form-control" id="user_id">
              </div>
              <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas_id">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <!-- Modal Edit Siswa -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="editUserForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Edit Data Siswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="nama_lengkap" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_lengkap" required>
              </div>
              <div class="mb-3">
                <label for="nis" class="form-label">Nis</label>
                <input type="number" class="form-control" id="nis" required>
                <small class="form-text text-muted">*Maksimal 10 digit</small>
              </div>
              <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" required>
                  <option value="Laki-Laki">Laki-Laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="Agama" class="form-label">Agama</label>
                <select class="form-control" id="agama" required>
                  <option value="Islam">Islam</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Budha">Budha</option>
                  <option value="Kristen">Kristen</option>
                  <option value="Katolik">Katolik</option>
                  <option value="Konghucu">Konghucu</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" required>
              </div>
              <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea id="alamat" class="form-control" required></textarea>
              </div>
              <div class="mb-3">
                <label for="nama_ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" id="nama_ayah" required>
              </div>
              <div class="mb-3">
                <label for="nama_ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" id="nama_ibu" required>
              </div>
              <div class="mb-3">
                <label for="rt" class="form-label">RT</label>
                <input type="text" class="form-control" id="rt">
              </div>
              <div class="mb-3">
                <label for="rw" class="form-label">RW</label>
                <input type="text" class="form-control" id="rw">
              </div>
              <div class="mb-3">
                <label for="kelurahan" class="form-label">Kelurahan</label>
                <input type="text" class="form-control" id="kelurahan">
              </div>
              <div class="mb-3">
                <label for="kecamatan" class="form-label">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan">
              </div>
              <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota">
              </div>
              <div class="mb-3">
                <label for="provinsi" class="form-label">Provinsi</label>
                <input type="text" class="form-control" id="provinsi">
              </div>
              <div class="mb-3">
                <label for="kode_pos" class="form-label">Kode Pos</label>
                <input type="text" class="form-control" id="kode_pos">
              </div>
              <div class="mb-3">
                <label for="no_handphone" class="form-label">No. Handphone</label>
                <input type="text" class="form-control" id="no_handphone">
              </div>
              <div class="mb-3">
                <label for="user_id" class="form-label">User ID</label>
                <input type="text" class="form-control" id="user_id">
              </div>
              <div class="mb-3">
                <label for="kelas_id" class="form-label">Kelas</label>
                <select class="form-control" id="kelas_id" required>
                  <option value=""></option>
                </select>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('/') }}assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('/') }}assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('/') }}assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- SweetAlert2 -->
<script src="{{ asset('/') }}assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="{{ asset('/') }}assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/') }}assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="{{ asset('/') }}assets/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": []
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script> -->
<script>
  let table; // buat di luar agar bisa diakses global

  $(function () {
    table = $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": [],
        "columnDefs": [
            {
            "targets": 0, // kolom No
            "searchable": false,
            "orderable": false,
            "render": function (data, type, row, meta) {
                return meta.row + 1;
            }
            },
            {
                "targets": -1, // kolom Action
                "orderable": false,
                "searchable": false
            }
        ]
    });

    table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const token = localStorage.getItem("token");

        // Ambil data dari API
        axios.get('http://127.0.0.1:8000/api/admin/siswas', {
            headers: {
                'Authorization': 'Bearer ' + token
            }
        })
        .then(response => {
            const data = response.data;

            data.forEach(item => {
                const actionButtons = `
                    <button class="btn btn-primary btn-sm" onclick="showDetail(${item.id})"><i class="fa fa-eye"></i></button>
                    <button class="btn btn-warning btn-sm" onclick="editUser(${item.id})"><i class="fa fa-edit"></i></button>
                    <button class="btn btn-danger btn-sm" onclick="deleteUser(${item.id})"><i class="fa fa-trash"></i></button>
                `;
                table.row.add([
                    "",
                    item.nama_lengkap,
                    item.nis,
                    item.jenis_kelamin,
                    item.tanggal_lahir,
                    item.kelas?.nama_kelas || '-',
                    actionButtons
                ]).draw(false);
            });
        })
        .catch(error => {
            console.error(error);
            if (error.response && error.response.status === 401) {
                logout();
            }
        });
    });

    function logout() {
        localStorage.removeItem('token');
        localStorage.removeItem('role'); 
        window.location.href = '/'; 
    }
</script>
<script>
  document.getElementById('addUserForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    const nama_lengkap = document.getElementById('nama_lengkap').value;
    const nis = document.getElementById('nis').value;
    const jenis_kelamin = document.getElementById('jenis_kelamin').value;
    const agama = document.getElementById('agama').value;
    const tempat_lahir = document.getElementById('tempat_lahir').value;
    const tanggal_lahir = document.getElementById('tanggal_lahir').value;
    const alamat = document.getElementById('alamat').value;
    const nama_ayah = document.getElementById('nama_ayah').value;
    const nama_ibu = document.getElementById('nama_ibu').value;
    const token = localStorage.getItem('token'); 

    fetch('http://localhost:8000/api/admin/siswas', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'Authorization': 'Bearer ' + token
      },
      body: JSON.stringify({ nama_lengkap, nis, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, alamat, nama_ayah, nama_ibu })
    })
    .then(response => {
      if (!response.ok) throw response;
      return response.json();
    })
    .then(data => {
      Toast.fire({
        icon: 'success',
        title: 'Siswa berhasil ditambahkan!'
      });
      document.getElementById('addUserForm').reset();
      $('#addUserModal').modal('hide');
      const token = localStorage.getItem("token");
      axios.get('http://127.0.0.1:8000/api/admin/siswas', {
        headers: {
          'Authorization': 'Bearer ' + token
        }
      })
      .then(response => {
        table.clear().draw();
        response.data.forEach(item => {
          const actionButtons = `
              <button class="btn btn-primary btn-sm" onclick="showDetail(${item.id})"><i class="fa fa-eye"></i></button>
              <button class="btn btn-warning btn-sm" onclick="editUser(${item.id})"><i class="fa fa-edit"></i></button>
              <button class="btn btn-danger btn-sm" onclick="deleteUser(${item.id})"><i class="fa fa-trash"></i></button>
          `;
          table.row.add([
            "",
            item.nama_lengkap,
            item.nis,
            item.jenis_kelamin,
            item.tanggal_lahir,
            item.kelas?.nama_kelas || '-',
            actionButtons
          ]).draw(false);
        });
      });
      
    })
    .catch(error => {
      error.text().then(text => {
        console.error("Error response:", text);
        Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: 'Terjadi kesalahan: ' + text,
        });
      });
    });
  });
</script>
<script>
  function loadRuangKelas() {
    const token = localStorage.getItem('token');

    axios.get('http://localhost:8000/api/admin/ruang-kelas', {
      headers: {
        'Authorization': 'Bearer ' + token
      }
    })
    .then(response => {
      const select = document.querySelector('#editUserModal #kelas_id');
      select.innerHTML = '<option value="">-- Pilih Kelas --</option>'; // kosongkan dulu

      response.data.forEach(kelas => {
        const option = document.createElement('option');
        option.value = kelas.id;
        option.text = kelas.nama_kelas;
        select.appendChild(option);
      });
    })
    .catch(error => {
      console.error('Gagal mengambil data kelas:', error);
    });
  }

  function showDetail(id) {
    const token = localStorage.getItem('token');
    axios.get(`http://localhost:8000/api/admin/siswas/${id}`, {
      headers: {
        'Authorization': 'Bearer ' + token
      }
    })
    .then(response => {
      const siswa = response.data;

      document.querySelector('#detailUserModal #nama_lengkap').value = siswa.nama_lengkap || '';
      document.querySelector('#detailUserModal #nis').value = siswa.nis || '';
      document.querySelector('#detailUserModal #jenis_kelamin').value = siswa.jenis_kelamin || '';
      document.querySelector('#detailUserModal #agama').value = siswa.agama || '';
      document.querySelector('#detailUserModal #tempat_lahir').value = siswa.tempat_lahir || '';
      document.querySelector('#detailUserModal #tanggal_lahir').value = siswa.tanggal_lahir || '';
      document.querySelector('#detailUserModal #alamat').value = siswa.alamat || '';
      document.querySelector('#detailUserModal #nama_ayah').value = siswa.nama_ayah || '';
      document.querySelector('#detailUserModal #nama_ibu').value = siswa.nama_ibu || '';
      document.querySelector('#detailUserModal #rt').value = siswa.rt || '';
      document.querySelector('#detailUserModal #rw').value = siswa.rw || '';
      document.querySelector('#detailUserModal #kelurahan').value = siswa.kelurahan || '';
      document.querySelector('#detailUserModal #kecamatan').value = siswa.kecamatan || '';
      document.querySelector('#detailUserModal #kota').value = siswa.kota || '';
      document.querySelector('#detailUserModal #provinsi').value = siswa.provinsi || '';
      document.querySelector('#detailUserModal #kode_pos').value = siswa.kode_pos || '';
      document.querySelector('#detailUserModal #no_handphone').value = siswa.no_handphone || '';
      document.querySelector('#detailUserModal #user_id').value = siswa.user_id || ''; 
      document.querySelector('#detailUserModal #kelas_id').value = siswa.kelas?.nama_kelas || '';

      document.querySelector('#detailUserModal #nama_lengkap').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #nis').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #jenis_kelamin').setAttribute('disabled', true);
      document.querySelector('#detailUserModal #agama').setAttribute('disabled', true);
      document.querySelector('#detailUserModal #tempat_lahir').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #tanggal_lahir').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #alamat').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #nama_ayah').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #nama_ibu').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #rt').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #rw').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #kelurahan').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #kecamatan').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #kota').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #provinsi').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #kode_pos').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #no_handphone').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #user_id').setAttribute('readonly', true);
      document.querySelector('#detailUserModal #kelas_id').setAttribute('readonly', true);

      $('#detailUserModal').modal('show');
    }).catch(error => {
        console.error(error);
        Swal.fire('Gagal', 'Tidak dapat mengambil data siswa.', 'error');
      });
  }

  let currentEditId = null;

  function editUser(id) {
    loadRuangKelas();
    const token = localStorage.getItem('token');
    currentEditId = id;

    axios.get(`http://localhost:8000/api/admin/siswas/${id}`, {
      headers: {
        'Authorization': 'Bearer ' + token
      }
    })
    .then(response => {
      const siswa = response.data;

      document.querySelector('#editUserModal #nama_lengkap').value = siswa.nama_lengkap;
      document.querySelector('#editUserModal #nis').value = siswa.nis;
      document.querySelector('#editUserModal #jenis_kelamin').value = siswa.jenis_kelamin;
      document.querySelector('#editUserModal #agama').value = siswa.agama;
      document.querySelector('#editUserModal #tempat_lahir').value = siswa.tempat_lahir;
      document.querySelector('#editUserModal #tanggal_lahir').value = siswa.tanggal_lahir;
      document.querySelector('#editUserModal #alamat').value = siswa.alamat;
      document.querySelector('#editUserModal #nama_ayah').value = siswa.nama_ayah;
      document.querySelector('#editUserModal #nama_ibu').value = siswa.nama_ibu;
      document.querySelector('#editUserModal #rt').value = siswa.rt;
      document.querySelector('#editUserModal #rw').value = siswa.rw;
      document.querySelector('#editUserModal #kelurahan').value = siswa.kelurahan;
      document.querySelector('#editUserModal #kecamatan').value = siswa.kecamatan;
      document.querySelector('#editUserModal #kota').value = siswa.kota;
      document.querySelector('#editUserModal #provinsi').value = siswa.provinsi;
      document.querySelector('#editUserModal #kode_pos').value = siswa.kode_pos;
      document.querySelector('#editUserModal #no_handphone').value = siswa.no_handphone;
      document.querySelector('#editUserModal #user_id').value = siswa.user_id; 
      document.querySelector('#editUserModal #kelas_id').value = siswa.kelas?.id || '';

      $('#editUserModal').modal('show');
    }).catch(error => {
        console.error(error);
        Swal.fire('Gagal', 'Tidak dapat mengambil data siswa.', 'error');
      });
  }

  document.getElementById('editUserModal').addEventListener('submit', function (e) {
    e.preventDefault();
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    const token = localStorage.getItem('token');
    const nama_lengkap = document.querySelector('#editUserModal #nama_lengkap').value;
    const nis = document.querySelector('#editUserModal #nis').value;
    const jenis_kelamin = document.querySelector('#editUserModal #jenis_kelamin').value;
    const agama = document.querySelector('#editUserModal #agama').value;
    const tempat_lahir = document.querySelector('#editUserModal #tempat_lahir').value;
    const tanggal_lahir = document.querySelector('#editUserModal #tanggal_lahir').value;
    const alamat = document.querySelector('#editUserModal #alamat').value;
    const nama_ayah = document.querySelector('#editUserModal #nama_ayah').value;
    const nama_ibu = document.querySelector('#editUserModal #nama_ibu').value;
    const rt = document.querySelector('#editUserModal #rt').value;
    const rw = document.querySelector('#editUserModal #rw').value;
    const kelurahan = document.querySelector('#editUserModal #kelurahan').value;
    const kecamatan = document.querySelector('#editUserModal #kecamatan').value;
    const kota = document.querySelector('#editUserModal #kota').value;
    const provinsi = document.querySelector('#editUserModal #provinsi').value;
    const kode_pos = document.querySelector('#editUserModal #kode_pos').value;
    const no_handphone = document.querySelector('#editUserModal #no_handphone').value;
    const user_id = document.querySelector('#editUserModal #user_id').value;
    const kelas_id = document.querySelector('#editUserModal #kelas_id').value;

    const body = { 
      nama_lengkap, 
      nis, 
      jenis_kelamin, 
      agama, 
      tempat_lahir, 
      tanggal_lahir, 
      alamat, 
      nama_ayah, 
      nama_ibu, 
      rt, 
      rw, 
      kelurahan, 
      kecamatan, 
      kota, 
      provinsi, 
      kode_pos, 
      no_handphone, 
      user_id, 
      kelas_id 
    };
    console.log('BODY yang akan dikirim:', body);          // bentuk objek
    console.table(body);                                   // tabel (bagus utk list key–value)
    console.log('Tanggal Lahir (string):', tanggal_lahir);
    
    axios.put(`http://localhost:8000/api/admin/siswas/${currentEditId}`, body, {
      headers: {
        'Authorization': 'Bearer ' + token
      }
    })
    .then(response => {
      Toast.fire({
        icon: 'success',
        title: 'User berhasil diperbaharui!'
      });
      $('#editUserModal').modal('hide');
      const token = localStorage.getItem("token");
      axios.get('http://127.0.0.1:8000/api/admin/siswas', {
        headers: {
          'Authorization': 'Bearer ' + token
        }
      })
      .then(response => {
        table.clear().draw();
        response.data.forEach(item => {
          const actionButtons = `
              <button class="btn btn-primary btn-sm" onclick="showDetail(${item.id})"><i class="fa fa-eye"></i></button>
              <button class="btn btn-warning btn-sm" onclick="editUser(${item.id})"><i class="fa fa-edit"></i></button>
              <button class="btn btn-danger btn-sm" onclick="deleteUser(${item.id})"><i class="fa fa-trash"></i></button>
          `;
          table.row.add([
            "",
            item.nama_lengkap,
            item.nis,
            item.jenis_kelamin,
            item.tanggal_lahir,
            item.kelas?.nama_kelas || '-',
            actionButtons
          ]).draw(false);
        });
      });
      
    })
    .catch(error => {
      const errorMessage = error.response?.data?.message || 'Terjadi kesalahan saat memperbarui data.';
      const validationErrors = error.response?.data?.errors;

      let detailErrors = '';
      if (validationErrors) {
        for (const key in validationErrors) {
          if (validationErrors.hasOwnProperty(key)) {
            detailErrors += `\n- ${validationErrors[key][0]}`;
          }
        }
      }

      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: errorMessage + detailErrors,
      });

      console.error("Error detail:", error.response?.data);
    });
  });

  function deleteUser(id) {
    const token = localStorage.getItem('token');
    
    Swal.fire({
      title: 'Hapus Siswa?',
      text: `Yakin ingin menghapus Siswa ID ${id}?`,
      icon: 'warning',
      showCancelButton: true,
      cancelButtonText: 'Batal',
      confirmButtonText: 'Ya, hapus!'
    }).then(result => {
      if (!result.isConfirmed) return;

      axios.delete(`http://127.0.0.1:8000/api/admin/siswas/${id}`, {
        headers: { 'Authorization': 'Bearer ' + token }
      })
      .then(() => {
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'success',
          title: 'User berhasil dihapus',
          showConfirmButton: false,
          timer: 3000
        });
        
        const token = localStorage.getItem("token");
        axios.get('http://127.0.0.1:8000/api/admin/siswas', {
          headers: {
            'Authorization': 'Bearer ' + token
          }
        })
        .then(response => {
          table.clear().draw();
          response.data.forEach(item => {
            const actionButtons = `
                <button class="btn btn-primary btn-sm" onclick="showDetail(${item.id})"><i class="fa fa-eye"></i></button>
                <button class="btn btn-warning btn-sm" onclick="editUser(${item.id})"><i class="fa fa-edit"></i></button>
                <button class="btn btn-danger btn-sm" onclick="deleteUser(${item.id})"><i class="fa fa-trash"></i></button>
            `;
            table.row.add([
              "",
              item.nama_lengkap,
              item.nis,
              item.jenis_kelamin,
              item.tanggal_lahir,
              item.kelas?.nama_kelas || '-',
              actionButtons
            ]).draw(false);
          });
        });
      })
      .catch(err => {
        let msg = 'Terjadi kesalahan.';
        if (err.response?.data?.message) msg = err.response.data.message;

        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'error',
          title: msg,
          showConfirmButton: false,
          timer: 3000
        });
      });
    });
  }
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const currentUrl = window.location.pathname;

    document.querySelectorAll('.nav-link').forEach(link => {
      const linkUrl = link.getAttribute('href');

      if (linkUrl && currentUrl === linkUrl) {
        link.classList.add('active');

        const treeview = link.closest('.nav-treeview');
        if (treeview) {
          const parentNavItem = treeview.closest('.nav-item');
          if (parentNavItem) {
            parentNavItem.classList.add('menu-open');

            const parentLink = parentNavItem.querySelector('a.nav-link');
            if (parentLink) parentLink.classList.add('active');
          }
        }
      }
    });
  });
</script>
</body>
</html>
