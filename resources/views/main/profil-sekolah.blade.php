<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Program & Pendaftaran</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #fff8f0;
    scroll-behavior: smooth;
  }

  nav {
    background: linear-gradient(to right, #2e8b57, #66bb6a);
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
  }

  .navbar-brand img {
    height: 70px;
    margin-right: 12px;
  }

  .navbar-brand span {
    font-weight: 700;
    font-size: 1.5rem;
    color: white;
  }

  .nav-link, .dropdown-item {
    color: white !important;
    font-weight: 600;
    transition: transform 0.3s;
  }

  .nav-link:hover, .dropdown-item:hover {
    color: #fff !important;
    background-color: rgba(255, 255, 255, 0.1);
    transform: scale(1.05);
  }

  .dropdown-menu {
    background-color: #e0f2e9;
    border: none;
  }

  .dropdown-menu a {
    color: #2e8b57 !important;
  }

  .dropdown-menu a:hover {
    background-color: #c8e6c9;
  }

  .hero {
    background: linear-gradient(rgba(102, 187, 106, 0.8), rgba(102, 187, 106, 0.8)), url('image.png') no-repeat center center/cover;
    height: 450px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
  }

  .hero h1 {
    font-size: 4rem;
    font-style: italic;
    font-weight: bold;
    color: black;
    text-shadow: 3px 3px 5px #f4c542;
    animation: fadeInUp 1.5s ease-out both;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .section-box {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 40px;
    margin-bottom: 30px;
  }

  .section-title {
    background-color: #ffc107;
    padding: 8px 20px;
    border-radius: 50px;
    display: inline-block;
    font-weight: bold;
    font-size: 1.25rem;
    margin-bottom: 20px;
    color: #000;
  }

  .registration {
    padding: 60px 20px;
    background: #e8f5e9;
    text-align: center;
  }

  .registration h2 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .registration p {
    font-size: 1rem;
    color: #333;
  }

  .info-sekolah {
    padding: 60px 20px;
    background-color: #f0fff5;
    text-align: center;
  }

  .info-sekolah h3 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .info-sekolah p {
    font-size: 1rem;
    color: #333;
  }

  .address {
    padding: 20px 0;
    background: #fff;
    font-size: 0.95rem;
    color: #000;
  }

  .address .location-icon {
    color: #2e8b57;
  }

  footer {
    background-color: #2e8b57;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 0.9rem;
  }

  /* Tambahan dari gambar kedua */
  .section {
    padding: 60px 0;
  }

  .blue-bg {
    background-color: #e6f0ff;
    border-radius: 0 50px 50px 0;
    padding-left: 30px;
  }

  .program-img, .fasilitas-img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 10px;
  }

  .rounded-orange {
    background-color: #ffa500;
    padding: 8px 15px;
    color: #fff;
    border-radius: 10px;
    font-weight: bold;
    display: inline-block;
    margin-bottom: 10px;
  }

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2.5rem;
    }
  }

  body {
    margin: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #fff8f0;
    scroll-behavior: smooth;
  }

  nav {
    background: linear-gradient(to right, #2e8b57, #66bb6a); /* Warna hijau gradasi */
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
  }

  .navbar-brand img {
    height: 70px; /* ukuran logo */
    margin-right: 12px;
  }

  .navbar-brand span {
    font-weight: 700;
    font-size: 1.5rem;
    color: white;
  }

  .nav-link, .dropdown-item {
    color: white !important;
    font-weight: 600;
    transition: transform 0.3s;
  }

  .nav-link:hover, .dropdown-item:hover {
    color: #fff !important;
    background-color: rgba(255, 255, 255, 0.1);
    transform: scale(1.05);
  }

  .dropdown-menu {
    background-color: #e0f2e9;
    border: none;
  }

  .dropdown-menu a {
    color: #2e8b57 !important;
  }

  .dropdown-menu a:hover {
    background-color: #c8e6c9;
  }

  .hero {
    background: linear-gradient(rgba(102, 187, 106, 0.8), rgba(102, 187, 106, 0.8)), url('image.png') no-repeat center center/cover;
    height: 450px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
  }

  .hero h1 {
    font-size: 4rem;
    font-style: italic;
    font-weight: bold;
    color: black;
    text-shadow: 3px 3px 5px #f4c542;
    animation: fadeInUp 1.5s ease-out both;
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(50px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .section-box {
    background-color: #fff;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    padding: 40px;
    margin-bottom: 30px;
  }

  .section-title {
    background-color: #ffc107;
    padding: 8px 20px;
    border-radius: 50px;
    display: inline-block;
    font-weight: bold;
    font-size: 1.25rem;
    margin-bottom: 20px;
    color: #000;
  }

  .registration {
    padding: 60px 20px;
    background: #e8f5e9;
    text-align: center;
  }

  .registration h2 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .registration p {
    font-size: 1rem;
    color: #333;
  }

  .info-sekolah {
    padding: 60px 20px;
    background-color: #f0fff5;
    text-align: center;
  }

  .info-sekolah h3 {
    color: #2e8b57;
    margin-bottom: 20px;
    font-weight: 700;
  }

  .info-sekolah p {
    font-size: 1rem;
    color: #333;
  }

  .address {
    padding: 20px 0;
    background: #fff;
    font-size: 0.95rem;
    color: #000;
  }

  .address .location-icon {
    color: #2e8b57;
  }

  footer {
    background-color: #2e8b57;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 0.9rem;
  }

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2.5rem;
    }
  }


</style>

</head>
<body onload="AOS.init();">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="/public/img/logosd.png" alt="Logo Sekolah" />
      <span>SDIT AL IHSAN</span>
    </a>
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Profil
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('selayang-pandang') }}">Selayang Pandang</a></li>
            <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
            <li><a class="dropdown-item" href="{{ route('struktur') }}">Struktur Organisai</a></li>
            <li><a class="dropdown-item" href="{{ route('pendidik') }}">Pendidik & Tenaga Kependidikan</a></li>
            <li><a class="dropdown-item" href="{{ route('fasilitas') }}">Fasilitas & Sarana</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Kegiatan & Prestasi
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('ekstrakurikuler') }}">Ekstrakurikuler</a></li>
            <li><a class="dropdown-item" href="{{ route('prestasi-guru') }}">Prestasi Guru</a></li>
            <li><a class="dropdown-item" href="{{ route('prestasi-siswa') }}">Prestasi Siswa</a></li>
          </ul>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            PPDB
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ route('pendaftaran') }}">Pendaftaran</a></li>
          <li><a class="dropdown-item" href="{{ route('kurikulumdanbiaya') }}">Kurikulum & Biaya</a></li>
          </ul>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('daftar') }}">Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('beranda') }}">Home</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1 class="display-5 fw-bold">Program & Pendaftaran</h1>
    <p class="lead">Informasi lengkap seputar program unggulan, fasilitas, dan pendaftaran siswa baru.</p>
  </div>
</section>

<section class="section blue-bg">
  <div class="container">
    <div class="section-title" data-aos="fade-up">PROGRAM UNGGULAN</div>

    <div class="row g-4 text-center justify-content-center">
      <!-- Bahasa Arab -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
        <img src="/public/img/bahasaarab.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Bahasa Arab</div>
      </div>

      <!-- Tahfidz Al-Quran -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
        <img src="/public/img/tahfidz.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Tahfidz Al-Quran</div>
      </div>

      <!-- Robotik & IT -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
      <img src="/public/img/robotik.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Robotik & IT</div>
      </div>

      <!-- Bahasa Inggris -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
      <img src="/public/img/bahasainggris.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Bahasa Inggris</div>
      </div>
    </div>
  </div>
</section>


<section class="section">
  <div class="container">
    <div class="section-title" data-aos="fade-up">GALERI FASILITAS</div>
    
    <div class="row g-4 text-center justify-content-center">
      <!-- Ruang Kelas -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
      <img src="/public/img/ruangkelas.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Ruang Kelas</div>
      </div>

      <!-- Masjid -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
      <img src="/public/img/masjid.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Masjid</div>
      </div>

      <!-- Ruang Kelas 2 -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
      <img src="/public/img/studio.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Studio</div>
      </div>

      <!-- Perpustakaan -->
      <div class="col-md-3 col-6" data-aos="zoom-in">
        <<img src="/public/img/perpustakaan.png" style="width: 100px; height: auto;" alt="Logo Sekolah">
        <div>Perpustakaan</div>
      </div>
    </div>
  </div>
</section>


<!-- Informasi Pendaftaran -->
<section class="section blue-bg">
  <div class="container">
    <div class="section-title" data-aos="fade-up">INFORMASI PENDAFTARAN</div>
    <div class="row">
      <div class="col-md-4" data-aos="fade-up">
        <h5 class="rounded-orange">A. Waktu Pendaftaran</h5>
        <p>Gelombang I: 1 Maret - 30 April 2025<br>
           Gelombang II: 1 Mei - 30 Juni 2025</p>
        <small>*Pendaftaran akan ditutup lebih awal jika kuota terpenuhi</small>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <h5 class="rounded-orange">B. Tempat Pendaftaran</h5>
        <ul>
          <li>SDIT Al-Ihsan Internasional</li>
          <li>Senin-Sabtu, 08.00-16.00</li>
          <li>Kontak: 082351636705 / 085821826787</li>
        </ul>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <h5 class="rounded-orange">C. Syarat Pendaftaran</h5>
        <ol>
          <li>Usia minimal 7 tahun</li>
          <li>Mengisi formulir pendaftaran</li>
          <li>Fotokopi akta lahir (2 lembar)</li>
          <li>Fotokopi KK (2 lembar)</li>
          <li>Fotokopi KTP Orang Tua</li>
          <li>Biaya pendaftaran</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="site-footer">
  <div class="footer-content">
    <p>&copy; 2025 <strong>SDIT AL IKHSAN</strong>. All Rights Reserved.</p>
    <p>Developed with ❤️ by Tim IT SDIT AL IKHSAN</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
