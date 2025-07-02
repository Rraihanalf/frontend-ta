<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>VISI MISI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <style>
 body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background-color: #ffffff;
  scroll-behavior: smooth;
}

nav {
  background: #ffffff;
  box-shadow: 0px 4px 10px rgba(0,0,0,0.05);
}

.navbar-brand img {
  height: 65px;
  margin-right: 12px;
}

.nav-link,
.dropdown-item {
  color: #333 !important;
  font-weight: 600;
  font-size:20px;
  transition: all 0.3s;
}

.nav-link:hover,
.dropdown-item:hover {
  color: #007BFF !important;
  background-color: #f4f4f4;
  transform: scale(1.05);
}

.dropdown-menu {
  background-color: #ffffff;
  border: 2px solid #eaeaea;
  border-radius: 8px;
}

.dropdown-menu a {
  color: #000000 !important;
  padding: 10px 15px;
}

.btn-success {
  background-color: #a6ce39;
  border: none;
}

.btn-success:hover {
  background-color: #8bbf1d;
}

.btn-pink {
  background-color: #f28ab2; /* merah muda */
  color: white;
  border: none;
}

.btn-pink:hover {
  background-color: #e6719d;
  color: white;
}


.hero {
  background: 
    linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)),
    url('/img/backvisimisi.png') no-repeat center center/cover;
  height: 450px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  position: relative;
  color: white;
  clip-path: ellipse(100% 85% at 50% 15%);
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

  .site-footer {
  background: linear-gradient(#e3caaf);
  color: black;
  text-align: center;
  padding: 20px 10px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
}

.site-footer .footer-content p {
  margin: 5px 0;
  font-size: 14px;
}

.site-footer strong {
  font-weight: bold;
}

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2.5rem;
    }
  }

  .running-text-container {
  background-color: #1e90ff;
  padding: 5px 0;
  overflow: hidden;
  white-space: nowrap;
  position: relative;
}

.running-text {
  display: inline-block;
  padding-left: 100%;
  animation: marquee 15s linear infinite;
  color: white;
  font-size: 14px;
}

@keyframes marquee {
  0%   { transform: translateX(0%); }
  100% { transform: translateX(-100%); }
}
</style>

</head>
<body onload="AOS.init();">

<div style="background: #e3caaf; padding: 5px 0; text-align: center; font-size: 16px;">
  <marquee behavior="scroll" direction="left" scrollamount="5" style="color: black;">
    📞 0812-3456-7890 | 📧 info@sditalihsan.sch.id | 📍Jl Pahlawan Gg Inpres RT 02 RW 01, No. 60 Kelurahan: Seberang Masjid, Banjarmasin Kota, Kalsel.
  </marquee>
</div>

<nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center gap-2 ps-3" href="#">
      <img src="img/logosd.png" alt="Logo Sekolah" />
      <div class="brand-text">
        <div class="brand-top fw-bold" style="font-size: 18px;">SD ISLAM TERPADU</div>
        <div class="brand-bottom fw-bold" style="font-size: 25px; line-height: 1;">AL IHSAN INTERNASIONAL</div>
      </div>
    </a>

    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
      <ul class="navbar-nav align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Profil
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('selayang-pandang') }}">Profil Sekolah</a></li>
            <li><a class="dropdown-item" href="{{ route('visi-misi') }}">Visi dan Misi</a></li>
            <li><a class="dropdown-item" href="{{ route('struktur') }}">Struktur Organisasi</a></li>
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
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            PPDB
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('pendaftaran') }}">Pendaftaran</a></li>
            <li><a class="dropdown-item" href="{{ route('kurikulumdanbiaya') }}">Kurikulum & Biaya</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{ route('beranda') }}">Home</a>
        </li>

        <li class="nav-item">
          <a href="{{ route('daftar') }}" class="btn btn-success ms-2 rounded-pill px-4 py-1" style="font-weight: bold;">Daftar</a>
        </li>

        <li class="nav-item">
          <a class="btn btn-pink ms-2 rounded-pill px-4 py-1 fw-bold" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</nav>





<section class="hero text-white text-center py-5";>
  <div class="container">
    <h1 class="display-5 fw-bold">Visi, Misi & Tujuan</h1>
    <p class="lead">Menjadi lembaga pendidikan Qur’ani berwawasan global.</p>
  </div>
</section>

<div class="container my-5">
  <!-- VISI -->
  <div class="section-box p-4 shadow-sm mb-4 bg-light rounded" data-aos="fade-up">
    <div class="d-flex align-items-center mb-3">
      <i class="fas fa-eye fa-2x text-primary me-3"></i>
      <h4 class="mb-0">VISI</h4>
    </div>
    <p class="mb-0 fs-5">Terwujudnya generasi Qur’ani yang berwawasan global</p>
  </div>

  <!-- MISI -->
  <div class="section-box p-4 shadow-sm mb-4 bg-white rounded" data-aos="fade-up" data-aos-delay="100">
    <div class="d-flex align-items-center mb-3">
      <i class="fas fa-bullseye fa-2x text-success me-3"></i>
      <h4 class="mb-0">MISI</h4>
    </div>
    <ol class="fs-5">
      <li>Menanamkan aqidah akhlak sesuai ajaran Al-Qur’an dan As-Sunnah Wal Jama’ah</li>
      <li>Menciptakan generasi anak-anak yang hafidz dan hafidzah</li>
      <li>Menjaga lingkungan sehat, kondusif, dan harmonis</li>
      <li>Mewujudkan SDIT bertaraf internasional</li>
    </ol>
  </div>

  <!-- TUJUAN -->
  <div class="section-box p-4 shadow-sm bg-light rounded" data-aos="fade-up" data-aos-delay="200">
    <div class="d-flex align-items-center mb-3">
      <i class="fas fa-flag-checkered fa-2x text-warning me-3"></i>
      <h4 class="mb-0">TUJUAN</h4>
    </div>
    <ul class="fs-5">
      <li>Menjadikan peserta didik hamba Allah yang shalih secara individu dan sosial</li>
      <li>Menanamkan karakter Islami dalam kehidupan sehari-hari</li>
      <li>Meningkatkan prestasi akademik dan non-akademik</li>
      <li>Melaksanakan pembelajaran aktif, kreatif, dan menyenangkan</li>
      <li>Membentuk kepribadian peduli lingkungan dan berwawasan global</li>
    </ul>
  </div>
</div>


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
