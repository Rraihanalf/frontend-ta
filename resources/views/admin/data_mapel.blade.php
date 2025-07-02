<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Mata Pelajaran</title>
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
            <h1>Data Mata Pelajaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Mata Pelajaran</li>
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
                <h3 class="card-title">Data Mata Pelajaran</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-primary btn-block col-md-3" onclick="addMapel()">
                  <i class="fa fa-plus"></i> Tambah Mata Pelajaran
                </button>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Tahun Ajar</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="dataTable">
                  </tbody>
                  <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>Tahun Ajar</th>
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

    <!-- Modal Tambah User -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="addUserForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Tambah Mata Pelajaran Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama_mapel" required>
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" required>
              </div>
              <div class="mb-3">
                <label for="tahun_ajar" class="form-label">Tahun Ajar</label>
                <input type="text" class="form-control" id="tahun_ajar" required>
                <small class="form-text text-muted">*Contoh: 2016/2017</small>
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

    <!-- Modal Detail User -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="addUserForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Tambah Mata Pelajaran Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="mb-3">
                <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama_mapel" readonly>
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" readonly>
              </div>
              <div class="mb-3">
                <label for="tahun_ajar" class="form-label">Tahun Ajar</label>
                <input type="text" class="form-control" id="tahun_ajar" readonly>
                <small class="form-text text-muted">*Contoh: 2016/2017</small>
              </div>
              <div class="mb-3">
                <label class="form-label">List Guru Pengajar</label>
                <div id="list_guru_pengampu"></div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
            </div>
          </div>
        </form>
      </div>
    </div>
   
    <!-- Modal Edit User -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <form id="editUserForm">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="addUserModalLabel">Tambah Mata Pelajaran Baru</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <input type="hidden" class="form-control" id="id_mapel">
              <div class="mb-3">
                <label for="nama_mapel" class="form-label">Nama Mata Pelajaran</label>
                <input type="text" class="form-control" id="nama_mapel" required>
              </div>
              <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control" id="kelas" required>
              </div>
              <div class="mb-3">
                <label for="tahun_ajar" class="form-label">Tahun Ajar</label>
                <input type="text" class="form-control" id="tahun_ajar" required>
                <small class="form-text text-muted">*Contoh: 2016/2017</small>
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
        axios.get('http://127.0.0.1:8000/api/admin/mapel', {
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
                const addGuru= `<button class="btn btn-success btn-sm" onclick="addGuru((${item.id}))"><i class="fa fa-plus"></i> Guru</button>`;
                table.row.add([
                    "",
                    item.nama_mapel,
                    item.kelas,
                    item.tahun_ajar,
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
  async function loadDataTable() {
    const token = localStorage.getItem("token");
    const baseUrl = 'http://127.0.0.1:8000/api/admin/mapel';
    
    try {
        const response = await fetch(baseUrl, {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + token,
                'Content-Type': 'application/json'
            }
        });
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        console.log('API Response:', data);
        
        // Clear table
        table.clear().draw();
        
        let dataArray = [];
        if (data.data && Array.isArray(data.data)) {
            dataArray = data.data;
        } else if (Array.isArray(data)) {
            dataArray = data;
        } else {
            throw new Error('Format response tidak sesuai');
        }
        
        // Populate table
        dataArray.forEach(item => {
            const actionButtons = `
                <button class="btn btn-primary btn-sm" onclick="showDetail(${item.id})">
                    <i class="fa fa-eye"></i>
                </button>
                <button class="btn btn-warning btn-sm" onclick="cobaEdit(${item.id})">
                    <i class="fa fa-edit"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="deleteUser(${item.id})">
                    <i class="fa fa-trash"></i>
                </button>
            `;
            
            table.row.add([
                "",
                item.nama_mapel || '',
                item.kelas || '',
                item.tahun_ajar || '',
                actionButtons
            ]).draw(false);
        });
        
    } catch (error) {
        console.error("Error loading data:", error);
        
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Gagal memuat data: ' + error.message,
        });
    }
  }

  function loadGuruPengajar(){
    const token = localStorage.getItem('token');

    axios.get('http://localhost:8000/api/admin/gurus', {
      headers: {
        'Authorization': 'Bearer ' + token
      }
    })
    .then(response => {
      const select = document.querySelector('#addUserModal #guru_id');
      select.innerHTML = '<option value="">-- Pilih Guru --</option>'; // kosongkan dulu

      response.data.forEach(guru => {
        const option = document.createElement('option');
        option.value = guru.id;
        option.text = guru.nama_lengkap;
        select.appendChild(option);
      });
    })
    .catch(error => {
      console.error('Gagal mengambil data kelas:', error);
    });
  }

  function addMapel(){
    $('#addUserModal').modal('show');
  }

  document.getElementById('addUserForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000
    });

    const nama_mapel = document.querySelector('#addUserForm #nama_mapel').value;
    const kelas = document.querySelector('#addUserForm #kelas').value;
    const tahun_ajar = document.querySelector('#addUserForm #tahun_ajar').value;
    const token = localStorage.getItem('token'); 

    const formData = {
        nama_mapel, 
        kelas,
        tahun_ajar
    };

    // console.log('=== DATA FORM SUBMIT ===');
    // console.log('Form Data:', formData);
    // console.log('Token:', token);
    // console.log('nama_mapel:', nama_mapel);
    // console.log('kelas:', kelas);
    // console.log('tahun_ajar:', tahun_ajar);
    // console.log('========================');

    const baseUrl = 'http://127.0.0.1:8000/api/admin/mapel';

    try {
      const response = await axios.post(baseUrl, formData, {
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + token
        }
      });

      Toast.fire({
        icon: 'success',
        title: 'Mata Pelajaran berhasil ditambahkan!'
      });
      
      document.getElementById('addUserForm').reset();
      $('#addUserModal').modal('hide');
      
      loadDataTable();
    } catch (error) {
      console.error("Error:", error);
      const errorMessage = error.response?.data?.message || error.message || 'Terjadi kesalahan';
      
      Swal.fire({
        icon: 'error',
        title: 'Gagal!',
        text: 'Terjadi kesalahan: ' + errorMessage,
      });
    }
  });


</script>
<script>
  async function loadDataTable() {
    const token = localStorage.getItem("token");
    const baseUrl = 'http://127.0.0.1:8000/api/admin/mapel';
    
    try {
        const response = await fetch(baseUrl, {
            method: 'GET',
            headers: {
                'Authorization': 'Bearer ' + token,
                'Content-Type': 'application/json'
            }
        });
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const data = await response.json();
        console.log('API Response:', data);
        
        // Clear table
        table.clear().draw();
        
        // Tentukan array data berdasarkan struktur response
        let dataArray = [];
        if (data.data && Array.isArray(data.data)) {
            dataArray = data.data;
        } else if (Array.isArray(data)) {
            dataArray = data;
        } else {
            throw new Error('Format response tidak sesuai');
        }
        
        // Populate table
        dataArray.forEach(item => {
            const actionButtons = `
                <button class="btn btn-primary btn-sm" onclick="showDetail(${item.id})">
                    <i class="fa fa-eye"></i>
                </button>
                <button class="btn btn-warning btn-sm" onclick="editUser(${item.id})">
                    <i class="fa fa-edit"></i>
                </button>
                <button class="btn btn-danger btn-sm" onclick="deleteUser(${item.id})">
                    <i class="fa fa-trash"></i>
                </button>
            `;
            
            table.row.add([
                "",
                item.nama_mapel,
                item.kelas,
                item.tahun_ajar,
                actionButtons
            ]).draw(false);
        });
        
    } catch (error) {
        console.error("Error loading data:", error);
        
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: 'Gagal memuat data: ' + error.message,
        });
    }
  }

  function showDetail(id) {
    const token = localStorage.getItem('token');
    currentEditId = id;

    axios.get(`http://localhost:8000/api/admin/mapel/${id}`, {
      headers: {
        'Authorization': 'Bearer ' + token
      }
    })
    .then(response => {
      const mapel = response.data;

      document.querySelector('#detailModal #nama_mapel').value = mapel.nama_mapel;
      document.querySelector('#detailModal #kelas').value = mapel.kelas;
      document.querySelector('#detailModal #tahun_ajar').value = mapel.tahun_ajar;

      const listGuruContainer = document.querySelector('#detailModal #list_guru_pengampu');
      listGuruContainer.innerHTML = '';

      axios.get(`http://localhost:8000/api/admin/guru-pengampu?mapel_id=${mapel.id}`, {
        headers: {
          'Authorization': 'Bearer ' + token
        }
      })
      .then(res => {
        const pengampuList = res.data;

        if (pengampuList.length === 0) {
          listGuruContainer.innerHTML = '<input type="text" class="form-control mb-2" value="(Belum ada guru)" readonly>';
        } else {
          pengampuList.forEach((item, index) => {
            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'form-control mb-2';
            input.value = item.guru?.nama_lengkap || '(Nama tidak ditemukan)';
            input.readOnly = true;

            listGuruContainer.appendChild(input);
          });
        }
      })
      .catch(error => {
        console.error('Gagal mengambil data guru pengampu:', error);
        listGuruContainer.innerHTML = '<input type="text" class="form-control" value="(Gagal memuat guru)" readonly>';
      });
      
      $('#detailModal').modal('show');
    }).catch(error => {
        console.error(error);
        Swal.fire('Gagal', 'Tidak dapat mengambil data kelas.', 'error');
      });
  }

  function editUser(id) {
    const token = localStorage.getItem('token');
    currentEditId = id;

    axios.get(`http://localhost:8000/api/admin/mapel/${id}`, {
      headers: {
        'Authorization': 'Bearer ' + token
      }
    })
    .then(response => {
      const mapel = response.data;

      document.querySelector('#editModal #id_mapel').value = mapel.id;
      document.querySelector('#editModal #nama_mapel').value = mapel.nama_mapel;
      document.querySelector('#editModal #kelas').value = mapel.kelas;
      document.querySelector('#editModal #tahun_ajar').value = mapel.tahun_ajar;
      
      $('#editModal').modal('show');
    }).catch(error => {
        console.error(error);
        Swal.fire('Gagal', 'Tidak dapat mengambil data Mata Pelajaran.', 'error');
      });
  }

  document.addEventListener('DOMContentLoaded', function() {
    const editForm = document.getElementById('editUserForm');
    
    if (editForm) {
        editForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            });
            const mapelId = document.querySelector('#editUserForm #id_mapel').value;
            const nama_mapel = document.querySelector('#editUserForm #nama_mapel').value;
            const kelas = document.querySelector('#editUserForm #kelas').value;
            const tahun_ajar = document.querySelector('#editUserForm #tahun_ajar').value;
            const token = localStorage.getItem('token');

            if (!mapelId || !nama_mapel || !kelas || !tahun_ajar) {
                Toast.fire({
                    icon: 'error',
                    title: 'Mohon lengkapi semua field!'
                });
                return;
            }

            const formData = {
                nama_mapel,
                kelas,
                tahun_ajar
            };

            const baseUrl = `http://127.0.0.1:8000/api/admin/mapel/${mapelId}`;

            try {
                const response = await axios.put(baseUrl, formData, {
                    headers: {
                        'Content-Type': 'application/json',
                        'Authorization': 'Bearer ' + token
                    }
                });

                Toast.fire({
                    icon: 'success',
                    title: 'Mata Pelajaran berhasil diperbarui!'
                });

                document.getElementById('editUserForm').reset();
                $('#editModal').modal('hide');

                loadDataTable();

            } catch (error) {
                console.error("Error:", error);
                const errorMessage = error.response?.data?.message || error.message || 'Terjadi kesalahan';

                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan: ' + errorMessage,
                });
            }
        });
    }
  });

  function deleteUser(id) {
    const token = localStorage.getItem('token');
    
    Swal.fire({
      title: 'Hapus Pelajaran?',
      text: `Yakin ingin menghapus Mata Pelajaran ID ${id}?`,
      icon: 'warning',
      showCancelButton: true,
      cancelButtonText: 'Batal',
      confirmButtonText: 'Ya, hapus!'
    }).then(result => {
      if (!result.isConfirmed) return;

      axios.delete(`http://127.0.0.1:8000/api/admin/mapel/${id}`, {
        headers: { 'Authorization': 'Bearer ' + token }
      })
      .then(() => {
        Swal.fire({
          toast: true,
          position: 'top-end',
          icon: 'success',
          title: 'Kelas berhasil dihapus',
          showConfirmButton: false,
          timer: 3000
        });
        loadDataTable();
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
