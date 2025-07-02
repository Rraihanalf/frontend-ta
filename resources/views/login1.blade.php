<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDIT AL-IKHSAN | Log in</title>
    <link rel="icon" type="image/png" href="img/logosd.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/dist/css/adminlte.min.css">
</head>
    <body class="hold-transition login-page">
        <div class="login-box">
        <div class="login-logo">
            <img src="img/logosd.png" style="height: 50px; margin-right: 12px;" alt="Logo Sekolah" />
            <a href="/"><b>SDIT AL-IHSAN</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>

            <form id="loginForm">
                <div class="input-group mb-3">
                <input type="email" id="email" class="form-control" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" id="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <!-- /.col -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
            <p class="mb-0">
                <a href="register.html" class="text-center">Register a new account</a>
            </p>
            </div>
            <!-- /.login-card-body -->
        </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="{{ asset('/') }}assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="{{ asset('/') }}assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('/') }}assets/dist/js/adminlte.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                e.preventDefault();

                axios.post('http://127.0.0.1:8000/api/login', {
                    email: document.getElementById('email').value,
                    password: document.getElementById('password').value
                })
                .then(response => {
                    localStorage.setItem('token', response.data.token); // Simpan token
                    window.location.href = '/admin';
                })
                .catch(error => {
                    alert('Login gagal');
                    console.error(error);
                });
            });
        </script>
    </body>
</html>

