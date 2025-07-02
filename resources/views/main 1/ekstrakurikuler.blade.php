<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EKSTRAKURIKULER</title>
  <link rel="icon" type="image/png" href="img/logosd.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  
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


    .section-title {
      background-color: #ffc107;
      display: inline-block;
      padding: 10px 25px;
      border-radius: 30px;
      font-weight: bold;
      margin-bottom: 25px;
    }

    .section {
      padding: 60px 0;
    }

    .blue-bg {
      background-color: #e6f0ff;
      border-radius: 0 50px 50px 0;
      padding-left: 30px;
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

    ul {
      padding-left: 18px;
    }

    .navbar-orange {
      background-color: #fd7e14;
    }

    .banner h1 {
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

  .ekskul-header {
  background: linear-gradient(to right, #388e3c, #66bb6a);
  color: #fff;
}

.hero {
  background: 
    linear-gradient(rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.0)),
    url('/img/sd.png') no-repeat center center/cover;
  height: 450px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  position: relative;
  color: white;
  clip-path: ellipse(100% 85% at 50% 15%);
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


<!-- Header Judul Ekstrakurikuler -->
<section class="hero">
  <div class="container">
    <h1 class="display-5 fw-bold">Ekstrakurikuler</h1>
    <p class="lead">Beragam kegiatan untuk menumbuhkan minat, bakat, dan karakter siswa.</p>
  </div>
</section>

<!-- Konten Ekstrakurikuler -->
<div class="container py-5">
  <div class="row text-center justify-content-center">

    <!-- Olahraga -->
    <div class="col-md-3 mb-4">
      <div class="p-4 shadow-sm rounded" style="background-color: #f9f9f9;">
        <img src="{{ asset('img/olahraga.png') }}" alt="Olahraga" style="width: 100px; height: 100px;">
        <h5 class="mt-3 text-success">Olahraga</h5>
        <p class="text-muted">Mendorong siswa mengembangkan kebugaran jasmani dan semangat sportivitas melalui berbagai cabang olahraga.</p>
      </div>
    </div>

    <!-- Seni -->
    <div class="col-md-3 mb-4">
      <div class="p-4 shadow-sm rounded" style="background-color: #f9f9f9;">
        <img src="{{ asset('img/seni.png') }}" alt="Seni" style="width: 100px; height: 100px;">
        <h5 class="mt-3 text-success">Seni</h5>
        <p class="text-muted">Membina kreativitas siswa melalui seni musik, tari, lukis, dan pertunjukan tradisional serta modern.</p>
      </div>
    </div>

    <!-- Pengetahuan -->
    <div class="col-md-3 mb-4">
      <div class="p-4 shadow-sm rounded" style="background-color: #f9f9f9;">
        <img src="{{ asset('img/pengetahuan.png') }}" alt="Pengetahuan" style="width: 100px; height: 100px;">
        <h5 class="mt-3 text-success">Pengetahuan</h5>
        <p class="text-muted">Mengembangkan rasa ingin tahu dan minat belajar melalui klub sains, bahasa, dan literasi.</p>
      </div>
    </div>

    <!-- Teknologi -->
    <div class="col-md-3 mb-4">
      <div class="p-4 shadow-sm rounded" style="background-color: #f9f9f9;">
        <img src="{{ asset('img/teknologi.png') }}" alt="Teknologi" style="width: 100px; height: 100px;">
        <h5 class="mt-3 text-success">Teknologi</h5>
        <p class="text-muted">Membekali siswa dengan keterampilan abad 21 seperti coding, robotik, dan komputer dasar.</p>
      </div>
    </div>

  </div>
</div>

<!-- Hero Section -->
<!-- ekstrakurikuler (diperbaiki) -->
<section class="section">
  <div class="container">
    <h2 class="text-center mb-5 section-title">Program Ekstrakurikuler</h2>
    <div class="row g-4">
      <div class="col-md-6 col-lg-3" data-aos="fade-up">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-success">Olahraga</h5>
          <p class="small text-muted">Meningkatkan kebugaran dan kerja sama tim melalui kegiatan fisik.</p>
          <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Habsy  - Setiap Selasa, 15.00-17.00</li>
              <li>Robotik  - Setiap Selasa, 15.00-17.00</li>
              <li>Tahfidz  - Setiap Selasa, 15.00-17.00</li>
              <li>IT  - Setiap Selasa, 15.00-17.00</li>
              <li>Pramuka  - Setiap Selasa, 15.00-17.00</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-primary">Seni</h5>
          <p class="small text-muted">Mengembangkan kreativitas dan ekspresi diri melalui beragam media artistik.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Kaligrafi - Setiap Rabu, 13.00-15.00</li>
              <li>Desain grafis - Setiap Rabu, 13.00-15.00</li>
              <li>Seni lukis - Setiap Rabu, 13.00-15.00</li>
              <li>Seni tari - Setiap Rabu, 13.00-15.00</li>
              <li>Qiroah - Setiap Rabu, 13.00-15.00</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-warning">Pengetahuan</h5>
          <p class="small text-muted">Mendorong rasa ingin tahu dan kemampuan berpikir kritis melalui pembelajaran tambahan.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Bahasa Arab & Inggris - Setiap Rabu, 13.00-15.00</li>
              <li>Kelompok belajar - Setiap Rabu, 13.00-15.00</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
          <h5 class="card-title text-danger">Teknologi</h5>
          <p class="small text-muted">Membekali siswa dengan keterampilan abad 21 melalui eksplorasi dunia digital dan inovasi.</p>
            <ul class="nav nav-tabs" id="myTab" role="tablist"></ul>
              <li>Robotik - Setiap Rabu, 13.00-15.00</li>
              <li>IT - Setiap Rabu, 13.00-15.00</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container my-5">
<div class="container">
    <h2 class="text-center mb-5 section-title">Jadwal Ekstrakurikuler</h2>
    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center">
            <thead class="table-success">
                <tr>
                    <th>Hari</th>
                    <th>Ekstrakurikuler</th>
                    <th>Waktu</th>
                    <th>Tempat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>Pramuka</td>
                    <td>14.00 – 16.00</td>
                    <td>Lapangan</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>Kaligrafi</td>
                    <td>13.30 – 15.00</td>
                    <td>Ruang Seni</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>Robotik</td>
                    <td>14.00 – 15.30</td>
                    <td>Lab Komputer</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>Desain Grafis</td>
                    <td>13.00 – 15.00</td>
                    <td>Lab Multimedia</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>Tahfidz</td>
                    <td>13.00 – 14.30</td>
                    <td>Ruang Tahfidz</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="section">
  <div class="container">
    <h3 class="section-title text-center mb-4">Galeri Ekstrakurikuler</h3>
    <div class="row justify-content-center text-center g-3">

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/robotik.png" class="img-fluid" style="width: 100px; height: auto;" alt="Robotik">
        <p class="mt-2 fw-semibold">Robotik</p>
      </div>

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
        <img src="img/tahfidz.png" class="img-fluid" style="width: 100px; height: auto;" alt="Tahfidz">
        <p class="mt-2 fw-semibold">Tahfidz</p>
      </div>

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
        <img src="img/bahasaarab.png" class="img-fluid" style="width: 100px; height: auto;" alt="Bahasa Arab">
        <p class="mt-2 fw-semibold">Bahasa Arab</p>
      </div>

    </div>
  </div>
</section>


<section class="section">
  <div class="container">
    <h3 class="section-title text-center mb-4">Galeri Pembimbing Ekstrakurikuler</h3>
    <div class="row justify-content-center text-center g-3">

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/robotik.png" class="img-fluid" style="width: 100px; height: auto;" alt="Robotik">
        <p class="mt-2 fw-semibold">Bapak Ahmad - Robotik</p>
      </div>

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
        <img src="img/tahfidz.png" class="img-fluid" style="width: 100px; height: auto;" alt="Tahfidz">
        <p class="mt-2 fw-semibold">Ustadzah Siti - Tahfidz</p>
      </div>

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
        <img src="img/bahasaarab.png" class="img-fluid" style="width: 100px; height: auto;" alt="Bahasa Arab">
        <p class="mt-2 fw-semibold">Ustadz Ali - Bahasa Arab</p>
      </div>

    </div>
  </div>
</section>





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
