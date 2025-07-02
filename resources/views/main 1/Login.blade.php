<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - SD Islam Terpadu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to bottom right, #eafaf1, #ffffff);
      font-family: 'Poppins', sans-serif;
    }

    .login-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      padding: 40px 30px;
      background-color: #fff;
      max-width: 450px;
      width: 100%;
    }

    .login-card h2 {
      font-weight: 700;
      color: #2e8b57;
      text-align: center;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 10px;
      padding: 12px;
    }

    .btn-login {
      background-color: #2e8b57;
      color: #fff;
      font-weight: bold;
      padding: 12px;
      border-radius: 10px;
      width: 100%;
      transition: background-color 0.3s;
    }

    .btn-login:hover {
      background-color: #256c46;
    }

    .logo {
      display: block;
      margin: 0 auto 20px;
      height: 70px;
    }

    .footer-text {
      text-align: center;
      font-size: 14px;
      color: #999;
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <div class="login-container">
    <div class="login-card">
      <img src="img/logosd.png" alt="Logo Sekolah" class="logo">
      <h2>Login SDIT Al Ihsan</h2>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email atau Username</label>
          <input type="text" class="form-control" id="email" name="email" required autofocus>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Kata Sandi</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-login">Masuk</button>
      </form>
      <div class="footer-text mt-4">
        Belum punya akun? <a href="{{ route('daftar') }}">Daftar di sini</a>
      </div>
    </div>
  </div>

</body>
</html>
