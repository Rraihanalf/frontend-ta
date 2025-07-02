<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KURIKULUM DAN BIAYA</title>
  <link rel="icon" type="image/png" href="img/logosd.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
   body {
  margin: 0;
  font-family: 'Poppins', sans-serif;
  background-color: #fff8f0;
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

.table tbody tr {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInRow 0.5s ease-in-out forwards;
    }

    .table tbody tr:nth-child(1) { animation-delay: 0.1s; }
    .table tbody tr:nth-child(2) { animation-delay: 0.2s; }
    .table tbody tr:nth-child(3) { animation-delay: 0.3s; }
    .table tbody tr:nth-child(4) { animation-delay: 0.4s; }
    .table tbody tr:nth-child(5) { animation-delay: 0.5s; }
    .table tbody tr:nth-child(6) { animation-delay: 0.6s; }
    .table tbody tr:nth-child(7) { animation-delay: 0.7s; }
    .table tbody tr:nth-child(8) { animation-delay: 0.8s; }
    .table tbody tr:nth-child(9) { animation-delay: 0.9s; }
    .table tbody tr:nth-child(10) { animation-delay: 1s; }
    .table tbody tr:nth-child(11) { animation-delay: 1.1s; }

    @keyframes fadeInRow {
      to {
        opacity: 1;
        transform: translateY(0);
      }
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



<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <h1 class="display-5 fw-bold">Kurikulum & Biaya</h1>
    <p class="lead"></p>
  </div>
</section>

<section class="section" data-aos="fade-up">
  <div class="container">
    <div class="section-box">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="section-title">KURIKULUM</div>
          <ul style="line-height: 1.8; padding-left: 20px;">
            <li>5 hari (Senin - Jumat)</li>
            <li>Jam sekolah 08.00 - 16.00 (Ba'da Ashar)</li>
            <li>Sekolah memberikan program pembiasaan di rumah bersama keluarga untuk hari Sabtu - Ahad dan dimutabaah</li>
            <li><strong>Kurikulum:</strong> Tematik Integratif berbasis Kurikulum Merdeka</li>
            <li><strong>Model Pembelajaran:</strong> Student-Centered & Project-Based Learning</li>
            <li><strong>Fokus Pembelajaran:</strong> Tahfidz, STEAM, Bahasa Arab dan Inggris</li>
          </ul>
          <!-- Tambahan gambar ilustrasi kurikulum -->
          <div class="row mt-3">
            <div class="col-6">
              <img src="img/ruangkelas.png" alt="Siswa Belajar" class="img-fluid rounded shadow">
            </div>
            <div class="col-6">
              <img src="img/perpustakaan.png" alt="Guru Mengajar" class="img-fluid rounded shadow">
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="section-title" style="background-color: #4da3ff; color: white;">BIAYA</div>
          <ul style="line-height: 1.8; padding-left: 20px;">
            <li>Uang Pangkal: Rp 4.000.000</li>
            <li>Seragam: Rp 1.500.000</li>
            <li>Buku Paket: Rp 400.000</li>
            <li>SPP: Rp 650.000</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Jadwal Mingguan Disusun Horizontal -->
<div class="mt-4">
  <div class="section-title">JADWAL MATA PELAJARAN</div>
  <div class="table-responsive">
    <table class="table table-bordered text-center align-middle">
      <thead class="table-light">
        <tr>
          <th>Waktu</th>
          <th>Senin</th>
          <th>Selasa</th>
          <th>Rabu</th>
          <th>Kamis</th>
          <th>Jumat</th>
        </tr>
      </thead>
   <!-- ...sebelumnya tetap... -->
<tbody>
  <tr>
    <td>08.00 - 08.45</td>
    <td>Upacara Bendera</td>
    <td>Tahfidz Qur'an</td>
    <td>Tahfidz Qur'an</td>
    <td>Tahfidz Qur'an</td>
    <td>Tahfidz & Doa</td>
  </tr>
  <tr>
    <td>08.45 - 09.30</td>
    <td>Tahfidz Qur'an</td>
    <td>Pancasila</td>
    <td>IPA</td>
    <td>Bahasa Indonesia</td>
    <td>Pendidikan Agama</td>
  </tr>
  <tr>
    <td>09.30 - 10.15</td>
    <td>Bahasa Indonesia</td>
    <td>Matematika</td>
    <td>Matematika</td>
    <td>Matematika</td>
    <td>Bahasa Indonesia</td>
  </tr>
  <tr>
    <td style="background-color: #fff3cd; font-weight: bold;">10.15 - 10.30</td>
    <td colspan="5" style="background-color: #fff3cd; font-weight: bold;">Istirahat</td>
  </tr>
  <tr>
    <td>10.30 - 11.15</td>
    <td>Matematika</td>
    <td>Bahasa Indonesia</td>
    <td>Bahasa Indonesia</td>
    <td>PJOK</td>
    <td>Tematik (P5)</td>
  </tr>
  <tr>
    <td>11.15 - 12.00</td>
    <td>Bahasa Arab</td>
    <td>Bahasa Arab</td>
    <td>STEAM</td>
    <td>Tematik (P5)</td>
    <td>Sholat Jumat</td>
  </tr>
  <tr>
    <td style="background-color: #fff3cd; font-weight: bold;">12.00 - 13.15</td>
    <td colspan="5" style="background-color: #fff3cd; font-weight: bold;">Sholat Dzuhur & Istirahat</td>
  </tr>
  <tr>
    <td>13.15 - 14.00</td>
    <td>IPA</td>
    <td>Seni Budaya</td>
    <td>P5</td>
    <td>Seni Musik</td>
    <td>Keputrian / Kajian</td>
  </tr>
  <tr>
    <td>14.00 - 14.45</td>
    <td>Bahasa Inggris</td>
    <td>P5</td>
    <td>Bahasa Arab</td>
    <td>Bahasa Arab</td>
    <td>Refleksi</td>
  </tr>
  <tr>
    <td>14.45 - 15.30</td>
    <td>P5</td>
    <td>Bahasa Inggris</td>
    <td>Bahasa Inggris</td>
    <td>Bahasa Inggris</td>
    <td>Literasi</td>
  </tr>
  <tr>
    <td style="background-color: #fff3cd; font-weight: bold;">15.30 - 16.00</td>
    <td colspan="5" style="background-color: #fff3cd; font-weight: bold;">Sholat Ashar & Persiapan Pulang</td>
  </tr>
</tbody>
<!-- ...lanjutan tetap... -->

    </table>
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
