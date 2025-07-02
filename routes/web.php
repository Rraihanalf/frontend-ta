<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main.landingPage');
});

Route::get('/landingPage', function () {
    return view('main.landingPage');
});

Route::get('/visi-misi', function () {
    return view('main.visi-misi');
})->name('visi-misi');

Route::get('/profil-sekolah', function () {
    return view('main.profil-sekolah');
})->name('profil-sekolah');

Route::get('/ekstrakurikuler', function () {
    return view('main.ekstrakurikuler');
})->name('ekstrakurikuler');

Route::get('/kurikulumdanbiaya', function () {
    return view('main.kurikulumdanbiaya');
})->name('kurikulumdanbiaya');

Route::get('/beranda', function () {
    return view('main.beranda');
})->name('beranda');

Route::get('/selayang-pandang', function () {
    return view('main.selayang-pandang');
})->name('selayang-pandang');

Route::get('/pendidik', function () {
    return view('main.pendidik');
})->name('pendidik');

Route::get('/fasilitas', function () {
    return view('main.fasilitas');
})->name('fasilitas');

Route::get('/struktur', function () {
    return view('main.struktur');
})->name('struktur');

Route::get('/prestasi-guru', function () {
    return view('main.prestasi-guru');
})->name('prestasi-guru');

Route::get('/prestasi-siswa', function () {
    return view('main.prestasi-siswa');
})->name('prestasi-siswa');

Route::get('/pendaftaran', function () {
    return view('main.pendaftaran');
})->name('pendaftaran');

Route::get('/daftar', function () {
    return view('main.daftar');
})->name('daftar');



Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/data-user', function () {
    return view('admin/data_user');
});

Route::get('/data-siswa', function () {
    return view('admin/data_siswa');
});

Route::get('/data-guru', function () {
    return view('admin/data_guru');
});

Route::get('/data-kelas', function () {
    return view('admin/data_kelas');
});

Route::get('/data-mapel', function () {
    return view('admin/data_mapel');
});

Route::get('/data-jadwal', function () {
    return view('admin/data_jadwalmapel');
});

Route::get('/data-nilai', function () {
    return view('admin/data_nilai');
});

Route::get('/data-absensi', function () {
    return view('admin/data_absensi');
});

Route::get('/data-calon-siswa', function () {
    return view('admin/data_calon_siswa');
});

Route::get('/data-transaksi', function () {
    return view('admin/data_transaksi');
});

Route::get('/data-spp-siswa', function () {
    return view('admin/data_spp_siswa');
});

Route::get('/guru', function () {
    return view('guru/dashboard');
});

Route::get('/guru/data-siswa', function () {
    return view('guru/data_siswa');
});

Route::get('/guru/data-nilai-siswa', function () {
    return view('guru/nilai');
});

Route::get('/guru/data-kelas', function () {
    return view('guru/dashboard');
});

Route::get('/guru/data-jadwal', function () {
    return view('guru/jadwal');
});

Route::get('/guru/mata-pelajaran', function () {
    return view('guru/mapel');
});