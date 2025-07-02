<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - SDIT Al IHSAN</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>

    body {
      font-family: 'Poppins', sans-serif;
      background-image: 
        linear-gradient(135deg, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)),
        url('img/login.png'); /* Ganti dengan path gambar */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
    }


    .home-button {
      position: absolute;
      top: 30px;
      right: 40px;
      background: transparent;
      border: 2px solid #fff;
      color: white;
      padding: 8px 16px;
      border-radius: 30px;
      font-weight: 500;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    .home-button:hover {
      background: white;
      color: #2a0a4e;
    }


    .container {
      width: 90%;
      max-width: 1000px;
      background: rgba(255, 255, 255, 0.05);
      display: flex;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(10px);
    }

    .left-panel, .right-panel {
      flex: 1;
      padding: 60px 40px;
    }

    .left-panel {
      background: transparent;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .left-panel h1 {
      font-size: 48px;
      margin-bottom: 20px;
    }

    .left-panel p {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 30px;
      color: #ddd;
    }

    .left-panel .learn-btn {
      background: #ff4d77;
      border: none;
      color: white;
      padding: 12px 24px;
      border-radius: 30px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }

    .left-panel .learn-btn:hover {
      background: #e63665;
    }

    .right-panel {
      background: rgba(255, 255, 255, 0.08);
      border-left: 1px solid rgba(255, 255, 255, 0.1);
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .right-panel h2 {
      font-size: 32px;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: none;
      outline: none;
      background: rgba(255, 255, 255, 0.2);
      color: white;
      font-size: 16px;
    }

    .form-group input::placeholder {
      color: #ccc;
    }

    .submit-btn {
      width: 100%;
      padding: 12px;
      margin-top: 10px;
      border: none;
      border-radius: 30px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      background: linear-gradient(to right, #f857a6, #ff5858);
      color: white;
      transition: 0.3s;
    }

    .submit-btn:hover {
      opacity: 0.9;
    }

    .social-icons {
      margin-top: 20px;
      text-align: center;
    }

    .social-icons i {
      font-size: 20px;
      margin: 0 10px;
      color: #fff;
      cursor: pointer;
      transition: 0.3s;
    }

    .social-icons i:hover {
      color: #ff4d77;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .left-panel, .right-panel {
        padding: 30px 20px;
        text-align: center;
      }

      .left-panel {
        border-bottom: 1px solid rgba(255,255,255,0.1);
      }
    }

    @keyframes slideInLeft {
      0% {
        opacity: 0;
        transform: translateX(-60px);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes slideInRight {
      0% {
        opacity: 0;
        transform: translateX(60px);
      }
      100% {
        opacity: 1;
        transform: translateX(0);
      }
    }

    @keyframes bounceIn {
      0% {
        opacity: 0;
        transform: scale(0.3);
      }
      50% {
        opacity: 1;
        transform: scale(1.1);
      }
      70% {
        transform: scale(0.9);
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }

    /* Panel kiri */
    .left-panel {
      animation: slideInLeft 1s ease forwards;
    }

    .left-panel h1 {
      opacity: 0;
      animation: bounceIn 1s ease forwards;
    }

    /* Panel kanan */
    .right-panel {
      opacity: 0;
      animation: slideInRight 1s ease forwards;
      animation-delay: 0.2s;
      animation-fill-mode: forwards;
    }

    .right-panel h2 {
      opacity: 0;
      animation: bounceIn 1s ease forwards;
      animation-delay: 0.2s;
      animation-fill-mode: forwards;
    }

    .logo-bawah {
      margin: 20px 0;
      text-align: center;
    }

    .logo-bawah img {
      max-height: 80px;
      width: auto;
      object-fit: contain;
      border-radius: 8px;
    }
  </style>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

  <!-- Tombol Home di pojok kanan atas -->
  <a href="{{ route('beranda') }}" class="home-button">Home</a>

  <div class="container">
    <!-- Panel Welcome -->
    <div class="left-panel">
      <h1>Welcome!</h1>
      <div class="logo-bawah">
        <img src="img/logosd.png" alt="Logo SDIT">
      </div>
      <p>Selamat datang di sistem informasi SD Islam Terpadu Al Ihsan. Silakan masuk untuk melanjutkan.</p>
    </div>
    <!-- Panel Login -->
    <div class="right-panel">
      <h2>Sign in</h2>
      <form id="loginForm">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" placeholder="Masukkan Email" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Masukkan Password" required>
        </div>
        <button type="submit" class="submit-btn">Submit</button>
      </form>
      <div class="social-icons">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-pinterest-p"></i>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script>
  document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    axios.post('http://127.0.0.1:8000/api/login', { email, password })
      .then(response => {
        const token = response.data.token;
        const user = response.data.user; // pastikan API mengembalikan data user dan role

        localStorage.setItem('token', token);
        localStorage.setItem('user', JSON.stringify(user)); // simpan user jika perlu

        // Cek role dan arahkan
        if (user.role === 'admin') {
          window.location.href = '/admin';
        } else if (user.role === 'guru') {
          window.location.href = '/guru';
        } else if (user.role === 'wali') {
          window.location.href = '/wali';
        } else {
          alert('Role tidak dikenal');
        }
      })
      .catch(error => {
        alert('Login gagal: ' + (error.response?.data?.message || 'Terjadi kesalahan'));
        console.error(error);
      });
  });
</script>

</body>
</html>
