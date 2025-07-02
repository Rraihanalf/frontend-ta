<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>DAFTAR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


  
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

    body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: #fff;
    color: #333;
}

.hero {
    background: url("img/guru.png") center/cover no-repeat;
    height: 250px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.hero .overlay {
    background: rgba(255, 255, 255, 0.85);
    width: 100%;
    padding: 20px;
}

.hero h1 {
    font-size: 32px;
    margin: 0;
    color: #333;
}

.hero nav {
    font-size: 14px;
    margin-top: 5px;
}

.hero nav a {
    text-decoration: none;
    color: #007BFF;
}

.team {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 40px 20px;
    gap: 30px;
}

.card {
    background: #f9f9f9;
    border-radius: 20px;
    text-align: center;
    width: 220px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}

.card img {
    width: 140px;
    height: 180px;
    object-fit: cover;
    border-radius: 50% 50% 50% 50%;
    border: 4px solid #e0f2f1;
    background: white;
}

.card h3 {
    margin: 15px 0 5px;
    font-size: 16px;
    color: #2e7d32;
}

.card p {
    font-size: 14px;
    color: #555;
}

footer {
      background-color: #1E90FF;
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 0.9rem;
    }


    body {
  background: linear-gradient(to right, #ffffff);
  font-family: 'Poppins', sans-serif;
  color: #333;
}

h2, h5 {
  color: #000000;
  font-weight: bold;
}

form {
  border: 1px solid #ddd;
  transition: 0.3s ease;
}

form:hover {
  box-shadow: 0 0 20px rgba(0, 123, 255, 0.2);
}

label {
  font-weight: 500;
  color: #000000;
}

input[type="text"],
input[type="tel"],
input[type="email"],
input[type="date"],
input[type="file"],
select,
textarea {
  border-radius: 10px;
  border: 1px solid #ccc;
  padding: 10px;
  font-size: 14px;
  transition: all 0.3s ease-in-out;
}

input:focus,
select:focus,
textarea:focus {
  border-color: #000000;
  box-shadow: 0 0 0 0.2rem rgba(2, 136, 209, 0.25);
}

textarea {
  resize: vertical;
}

button.btn-primary {
  background-color: #0288d1;
  border: none;
  padding: 10px 30px;
  font-weight: bold;
  border-radius: 10px;
  transition: background-color 0.3s ease;
}

button.btn-primary:hover {
  background-color: #01579b;
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



<div class="banner">
  <h1>Pendaftaran</h1>
</div>

<div class="container mt-5 mb-5">
<div class="text-center mb-4">
  <h2 class="fw-bold"><i class="bi bi-pencil-square me-2 text-primary"></i> Pendaftaran Siswa Baru</h2>
  <p class="text-muted">Formulir ini untuk calon siswa <strong>Sekolah Dasar Islam Terpadu AL IHSAN</strong></p>

  <img src="img/anak-sekolah.png" alt="Ilustrasi Anak Sekolah" class="img-fluid" style="max-height: 200px;">
</div>


  <form class="bg-light p-4 shadow-lg rounded animate__animated animate__fadeInUp" enctype="multipart/form-data">
    <h5 class="mb-3 text-primary fw-bold"><i class="bi bi-person-fill me-2"></i> Data Diri Siswa</h5>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="nama" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
        <input type="text" class="form-control" id="tempat_lahir" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" id="tanggal_lahir" required>
      </div>
      <div class="col-md-6 mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select class="form-select" required>
          <option value="">Pilih...</option>
          <option>Laki-laki</option>
          <option>Perempuan</option>
        </select>
      </div>
      <div class="col-md-6 mb-3">
        <label for="asal_tk" class="form-label">Asal TK/RA</label>
        <input type="text" class="form-control" id="asal_tk" required>
      </div>
      <div class="col-12 mb-3">
        <label for="alamat" class="form-label">Alamat Lengkap</label>
        <textarea class="form-control" id="alamat" rows="3" required></textarea>
      </div>
    </div>

    <h5 class="mt-4 mb-3 text-success fw-bold"><i class="bi bi-people-fill me-2"></i> Data Orang Tua/Wali</h5>
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="nama_ortu" class="form-label">Nama Orang Tua/Wali</label>
        <input type="text" class="form-control" id="nama_ortu" required>
      </div>
      <div class="col-md-6 mb-3">
        <label for="hp" class="form-label">No. HP Aktif</label>
        <input type="tel" class="form-control" id="hp" required>
      </div>
      <div class="col-md-12 mb-3">
        <label for="email" class="form-label">Email Aktif</label>
        <input type="email" class="form-control" id="email" placeholder="contoh@email.com" required>
      </div>
    </div>

    <h5 class="mt-4 mb-3 text-danger fw-bold"><i class="bi bi-upload me-2"></i> Unggah Dokumen Siswa</h5>
    <div class="row">
      <div class="col-md-4 mb-3">
        <label class="form-label">Kartu Keluarga (KK)</label>
        <input type="file" class="form-control" required>
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label">Akta Kelahiran</label>
        <input type="file" class="form-control" required>
      </div>
      <div class="col-md-4 mb-3">
        <label class="form-label">Foto 3x4</label>
        <input type="file" class="form-control" required>
      </div>
    </div>

    <div class="text-end mt-4">
      <button type="submit" class="btn btn-primary px-4 py-2">
        <i class="bi bi-send-fill me-2"></i> Kirim Pendaftaran
      </button>
    </div>
  </form>
</div>
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
