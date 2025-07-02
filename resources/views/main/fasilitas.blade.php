<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>fASILITAS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> 
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



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


.banner {
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

    .banner h1 {
      font-size: 4rem;
      font-style: italic;
      font-weight: bold;
      color:white;
      text-shadow: 3px 3px 5px #005B8f;
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


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>

<div class="banner">
  <h1>Fasilitas</h1>
</div>

<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-5 fw-bold">Fasilitas dan Sarana Prasarana</h2>
    <div class="row g-4 justify-content-center">

      <div class="col-md-6 d-flex" data-aos="fade-up">
        <i class="fas fa-user-friends fa-2x text-primary me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Layanan Bimbingan Konseling</h6>
          <p class="mb-0">Pendampingan emosional dan pembentukan karakter siswa.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="50">
        <i class="fas fa-first-aid fa-2x text-danger me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Layanan UKS</h6>
          <p class="mb-0">Menunjang kesehatan siswa dengan fasilitas pemeriksaan dasar.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <i class="fas fa-book-reader fa-2x text-success me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Perpustakaan</h6>
          <p class="mb-0">Koleksi buku islami, fiksi, dan referensi pembelajaran.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="150">
        <i class="fas fa-utensils fa-2x text-warning me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Kantin</h6>
          <p class="mb-0">Menyediakan makanan sehat dan halal bagi siswa.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <i class="fas fa-building fa-2x text-secondary me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Aula</h6>
          <p class="mb-0">Ruang serbaguna untuk acara dan kegiatan sekolah.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="250">
        <i class="fas fa-basketball-ball fa-2x text-info me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Lapangan Basket & Upacara</h6>
          <p class="mb-0">Tempat olahraga dan pelaksanaan upacara bendera.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="fas fa-tree fa-2x text-success me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Halaman Luas & Area Parkir</h6>
          <p class="mb-0">Mendukung kenyamanan dan keamanan aktivitas siswa dan orang tua.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="350">
        <i class="fas fa-book-open fa-2x text-primary me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Payung Baca & Gerobak Baca</h6>
          <p class="mb-0">Mendorong literasi siswa dengan suasana belajar terbuka dan menyenangkan.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <i class="fas fa-leaf fa-2x text-success me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Screen House</h6>
          <p class="mb-0">Area pembelajaran biologi dan ekosistem kecil.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="450">
        <i class="fas fa-desktop fa-2x text-info me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Labkom (Laboratorium Komputer)</h6>
          <p class="mb-0">Dilengkapi fasilitas TIK dan internet untuk mendukung pembelajaran digital.</p>
        </div>
      </div>

      <div class="col-md-12" data-aos="fade-up" data-aos-delay="500">
        <i class="fas fa-chalkboard fa-2x text-secondary me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Fasilitas Kelas Lengkap</h6>
          <p class="mb-0">Setiap kelas dilengkapi AC, proyektor LCD, pojok baca, meja & kursi nyaman, papan tulis, lemari, alat kebersihan, dan struktur organisasi.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="550">
        <i class="fas fa-restroom fa-2x text-danger me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">WC Terpisah</h6>
          <p class="mb-0">Fasilitas sanitasi yang bersih dan terpisah untuk laki-laki dan perempuan.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="600">
        <i class="fas fa-hand-holding-water fa-2x text-info me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Westafel di Tiap Kelas</h6>
          <p class="mb-0">Meningkatkan kebiasaan hidup bersih dan sehat.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="650">
        <i class="fas fa-user-tie fa-2x text-primary me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Ruang Kepala Sekolah & Guru</h6>
          <p class="mb-0">Ruang kerja yang mendukung manajemen dan koordinasi kegiatan sekolah.</p>
        </div>
      </div>

      <div class="col-md-6 d-flex" data-aos="fade-up" data-aos-delay="700">
        <i class="fas fa-briefcase fa-2x text-dark me-3"></i>
        <div>
          <h6 class="fw-bold mb-1">Ruang Tata Usaha</h6>
          <p class="mb-0">Pusat administrasi dan pelayanan informasi kepada orang tua siswa.</p>
        </div>
      </div>

    </div>
  </div>
</section>


</body>
</html>





<footer class="site-footer">
  <div class="footer-content">
    <p>&copy; 2025 <strong>SDIT AL IKHSAN</strong>. All Rights Reserved.</p>
    <p>Developed with ❤️ by Tim IT SDIT AL IKHSAN</p>
  </div>
</footer>

</body>
</html>
