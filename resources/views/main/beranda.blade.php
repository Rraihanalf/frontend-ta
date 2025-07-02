<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>SDIT AL-IKHSAN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
  

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

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
  position: relative;
  height: 450px;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  clip-path: ellipse(100% 85% at 50% 15%);
  color: white;
}

/* Style untuk gambar-gambar fade */
.banner .fade-img {
  position: absolute;
  top: 0;
  left: 0;
  z-index: -1;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0;
  animation: fadeCycle 12s infinite;
  animation-timing-function: ease-in-out;
}

/* Set delay berbeda untuk tiap gambar */
.banner .fade-img:nth-child(1) {
  animation-delay: 0s;
}
.banner .fade-img:nth-child(2) {
  animation-delay: 4s;
}
.banner .fade-img:nth-child(3) {
  animation-delay: 8s;
}

@keyframes fadeCycle {
  0% { opacity: 0; }
  10% { opacity: 1; }
  30% { opacity: 1; }
  40% { opacity: 0; }
  100% { opacity: 0; }
}
    .banner h1 {
      font-size: 4rem;
      font-style: italic;
      font-weight: bold;
      color:white;
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

    .registration {
      padding: 60px 20px;
      font-style: italic;
      text-align: center;
    }

    .registration h2 {
      margin-bottom: 20px;
      font-weight: 700;
      font-style: italic;
    }

    .registration p {
      font-size: 1rem;
      font-size: 1.5rem;
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

    .info-sekolah {
      padding: 60px 20px;
      background-color: #ffffff;
      text-align: center;
    }

    .info-sekolah h3 {
      color: #;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .info-sekolah p {
      font-size: 1.5rem;
      color: #333;
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
      .banner h1 {
        font-size: 2.5rem;
      }
    }

    .section {
  margin: 60px 0; /* atas dan bawah 60px */
  background-color: #ffffff;
  font-size: rem;
}

AOS.init({
    duration: 5000, // Durasi animasi (ms)
    once: true      // Hanya animasi 1x saat scroll ke elemen
  });

  .card .position-absolute {
  font-size: 0.9rem;
  text-align: center;
  width: 45px;
  line-height: 1.1;
}

.brand-text {
  display: flex;
  flex-direction: column;
  line-height: 1;
}

.brand-top {
  font-size: 20px;
  font-weight: 600;
  color: #333;
  letter-spacing: 0.5px;
}

.brand-bottom {
  font-size: 20px;
  font-weight: 800;
  color: #333;
  letter-spacing: 0.5px;
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

<div class="banner">
  <div class="fade-img" style="background-image: url('/img/sd.png');"></div>
  <div class="fade-img" style="background-image: url('/img/fasilitas.png');"></div>
  <div class="fade-img" style="background-image: url('/img/pendidik.png');"></div>

  <h1><strong>SDIT AL-IHSAN</strong><br>INTERNASIONAL</h1>
</div>

<!-- Contoh WhatsApp -->
<a href="https://wa.me/6281351750693?text=Halo%20saya%20tertarik%20dengan%20produk%20Anda" target="_blank">
  Hubungi Kami
</a>




</a>

<style>
.wa-float {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
}
</style>


<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,  // durasi animasi 1 detik
    once: true       // hanya animasi sekali
  });
</script>


<section class="section" style="
  background: linear-gradient(rgba(0,0,0,0.0), rgba(0,0,0,0.0)), url('img/backmemilih.png') no-repeat center center;
  background-size: cover;
  color: black;
  overflow: hidden;
">
  <div class="container text-center py-5">
    <h2 class="fw-bold mb-5">Mengapa Memilih SDIT AL-IHSAN?</h2>

    <div class="marquee-wrapper">
      <div class="marquee-content">

        <!-- Ulangi konten 2x untuk animasi seamless -->
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" width="60" alt="">
          <h5 class="mt-3">Program Tahfidz</h5>
          <p>Pembinaan hafalan Al-Qur'an sejak dini.</p>
        </div>
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/2554/2554975.png" width="60" alt="">
          <h5 class="mt-3">Ekstrakurikuler</h5>
          <p>Kegiatan untuk bakat dan minat siswa.</p>
        </div>
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="60" alt="">
          <h5 class="mt-3">Guru Profesional</h5>
          <p>Tenaga pendidik yang kompeten.</p>
        </div>
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/1256/1256650.png" width="60" alt="">
          <h5 class="mt-3">Lingkungan Islami</h5>
          <p>Suasana belajar religius dan nyaman.</p>
        </div>
        <!-- Konten diulang -->
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/201/201623.png" width="60" alt="">
          <h5 class="mt-3">Program Tahfidz</h5>
          <p>Pembinaan hafalan Al-Qur'an sejak dini.</p>
        </div>
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/2554/2554975.png" width="60" alt="">
          <h5 class="mt-3">Ekstrakurikuler</h5>
          <p>Kegiatan untuk bakat dan minat siswa.</p>
        </div>
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="60" alt="">
          <h5 class="mt-3">Guru Profesional</h5>
          <p>Tenaga pendidik yang kompeten.</p>
        </div>
        <div class="marquee-item">
          <img src="https://cdn-icons-png.flaticon.com/512/1256/1256650.png" width="60" alt="">
          <h5 class="mt-3">Lingkungan Islami</h5>
          <p>Suasana belajar religius dan nyaman.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
.marquee-wrapper {
  width: 100%;
  overflow: hidden;
  position: relative;
}

.marquee-content {
  display: flex;
  width: max-content;
  animation: marqueeAnim 40s linear infinite;
}

.marquee-item {
  flex: 0 0 250px;
  background: rgba(255, 255, 255, 0.85);
  border-radius: 12px;
  padding: 20px;
  margin: 0 15px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

@keyframes marqueeAnim {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}
</style>





<style>
  .fade-container {
    position: relative;
    width: 100%;
    min-height: 450px; /* pastikan cukup untuk gambar besar */
    overflow: hidden;
  }

  .fade-toggle {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    transition: opacity 1s ease;
    opacity: 0;
    pointer-events: none;
  }

  .fade-toggle.active {
    opacity: 1;
    pointer-events: auto;
  }
</style>

<section class="registration" style="padding: 20px; background: #ffffff; border-radius: 10px;">

  <div class="fade-container">

    <!-- Konten Tulisan -->
    <div id="textContent" class="fade-toggle active">
      <h2 style="color: #2c3e50; font-weight: bold; margin-bottom: 10px;">
        📝 Menerima Peserta Didik Baru
      </h2>
      <p style="font-size: 1.1rem; margin-bottom: 5px;">Tahun Pelajaran 2025/2026</p>
      <p style="margin-bottom: 10px;">
        <span class="location-icon" style="font-size: 1.2rem;">📍</span> 
        Jl Pahlawan Gg Inpres RT 02 RW 01, No. 60, Kelurahan Seberang Masjid, Banjarmasin Kota, Kalsel.
      </p>

      <p><strong>🕒 Jadwal Pendaftaran:</strong></p>
      <ul style="list-style: none; padding-left: 0;">
        <li>• 1 Juni 2025 - 30 Juli 2025</li>
        <li>• Jam: 08.00 - 15.00 WITA</li>
      </ul>

      <p><strong>📞 Kontak:</strong> 
        <a href="tel:+628123456789" style="color: #2980b9;">+62 812-3456-789</a> | 
        <a href="mailto:info@sditalikhsan.sch.id" style="color: #2980b9;">info@sditalikhsan.sch.id</a>
      </p>

      <p><strong>🖥️ Cara Pendaftaran:</strong></p>
      <ul style="list-style: none; padding-left: 0; margin-top: 5px;">
        <li>• Kunjungi website resmi kami di 
          <a href="https://sditalikhsan.sch.id" target="_blank" style="color: #2980b9;">sditalikhsan.sch.id</a></li>
        <li>• Isi formulir pendaftaran online</li>
        <li>• Serahkan dokumen pendukung ke sekolah</li>
      </ul>
    </div>

    <!-- Gambar Pengganti -->
    <div id="imageContent" class="fade-toggle" style="text-align: center;">
      <img src="img/brosur.png" alt="Foto Sekolah" style="max-width: 800px; width: 700%; height: auto; border-radius: 10px;">
    </div>

  </div>
</section>

<script>
  let isTextVisible = true;

  setInterval(() => {
    const text = document.getElementById("textContent");
    const image = document.getElementById("imageContent");

    if (isTextVisible) {
      text.classList.remove("active");
      image.classList.add("active");
    } else {
      text.classList.add("active");
      image.classList.remove("active");
    }

    isTextVisible = !isTextVisible;
  }, 5000);
</script>






<section class="section">
  <div class="container">
    <h2 class="text-center fw-bold mb-5" style="font-size: 2rem;">Galeri Kegiatan Siswa</h2>
    <div class="row justify-content-center text-center g-3">

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <img src="img/robotik.png" style="width: 200px; height: auto;" alt="Logo Sekolah">
        <p class="mt-2 fw-semibold">Kegiatan Robotik</p>
      </div>

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
        <img src="img/tahfidz.png" style="width: 200px; height: auto;" alt="Logo Sekolah">
        <p class="mt-2 fw-semibold">Tahfidz Al-Qur'an</p>
      </div>

      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
        <img src="img/bahasaarab.png" style="width: 200px; height: auto;" alt="Logo Sekolah">
        <p class="mt-2 fw-semibold">Bahasa Arab</p>
      </div>

    </div>
  </div>
</section>


<section class="info-sekolah">
  <div class="container">
    <div class="row text-center">
    <div class="col-md-3 col-6" data-aos="zoom-in">
        <h2>300+</h2>
        <p>Siswa Aktif</p>
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <h2>25+</h2>
        <p>Guru Profesional</p>
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in">
        <h2>15+</h2>
        <p>Prestasi Tingkat Kota</p>
      </div>
      <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <h2>100%</h2>
        <p>Lulus & Melanjutkan</p>
      </div>
    </div>
  </div>
</section>

<section class="section bg-light">
  <div class="container">
    <div class="section-title text-center">Testimoni Orang Tua</div>
    <div class="row g-4">
    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
        <div class="testimonial p-3 shadow rounded">
          <p>"Anak saya berkembang sangat pesat di SDIT AL-IHSAN. Gurunya perhatian dan pembelajarannya menyenangkan!"</p>
          <strong>- Ibu Nur, Wali Murid</strong>
        </div>
      </div>
      <!-- Tambahkan lebih banyak testimoni -->
    </div>
  </div>
</section>

<section class="section bg-white">
  <div class="container">
    <h2 class="text-center mb-5">Berita & Informasi</h2>
    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100 shadow">
          <div class="position-relative">
            <img src="img/tahfidz.png" class="card-img-top" alt="Berita 1">
            <div class="position-absolute top-0 start-0 bg-success text-white p-2 rounded-end">
              <strong>12</strong><br>SEP
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title text-success">Bintang Tamu Life Model: Edukasi Kesehatan</h5>
            <p class="card-text"><strong>Banjarmasin –</strong> Kamis, 12 September 2024, SD Islam Terpadu Ukhuwah...</p>
            <p class="text-muted small">SDIT UKHUWAH</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100 shadow">
          <div class="position-relative">
            <img src="img/tahfidz.png" class="card-img-top" alt="Berita 2">
            <div class="position-absolute top-0 start-0 bg-success text-white p-2 rounded-end">
              <strong>28</strong><br>AGU
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title text-success">Outdoor Learning: Menyemai Kesadaran Lingkungan</h5>
            <p class="card-text"><strong>Banjarbaru –</strong> Sebanyak 179 siswa kelas VI dari SD Islam Terpadu AL IHSAN...</p>
            <p class="text-muted small">blogger</p>
          </div>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="card h-100 shadow">
          <div class="position-relative">
            <img src="img/tahfidz.png" class="card-img-top" alt="Berita 3">
            <div class="position-absolute top-0 start-0 bg-success text-white p-2 rounded-end">
              <strong>16</strong><br>AGU
            </div>
          </div>
          <div class="card-body">
            <h5 class="card-title text-success">Semarak Upacara Hari Pramuka dengan Semaphore Dance</h5>
            <p class="card-text"><strong>Banjarmasin –</strong> Pada Jumat, 16 Agustus 2024, SD Islam Terpadu AL IHSAN...</p>
            <p class="text-muted small">blogger</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section bg-white">
  <div class="container text-center">
    <h2 class="fw-bold mb-4">Profil Video SDIT AL-IHSAN</h2>
    <p class="text-muted mb-4">Lihat suasana kegiatan belajar, fasilitas, dan kegiatan unggulan sekolah kami:</p>
    <div class="ratio ratio-16x9">
      <iframe src="https://www.youtube.com/embed/5fxkimrPkaE" 
        title="Profil SDIT AL-IHSAN" allowfullscreen 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture">
      </iframe>
    </div>
  </div>
</section>




<footer class="site-footer">
  <div class="footer-content">
    <p>&copy; 2025 <strong>SDIT AL IKHSAN</strong>. All Rights Reserved.</p>
    <p>Developed with ❤️ by Tim IT SDIT AL IKHSAN</p>
  </div>
</footer>


</body>
</html>
