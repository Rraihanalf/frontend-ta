<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="{{asset('css/mainStyles/tentangObat.css')}}">
        <title>SIPTEK-Tentang Obat</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <style>
         body {
            background-image: url('{{ asset('img/obat.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: black;
        }

        #banner {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 80px 0;
        }

        footer {
            background-color: #002b5c;
            color: black;
        }
        </style>

    <body>

        <nav>
            <div class="Logo">
                <img src="{{asset('img/rshdLogo.png')}}"  alt="Logo">
                <p>SIPTEKin</p>
            </div>    
            <ul>
                <li>
                    <a href = "{{route('landingPage')}}">BERANDA</a>
                </li>
                <li>
                    <a href = "{{route('mitraKami')}}">MITRA KAMI</a>
                </li>
                <li>
                    <a href = "{{route('tentangObat')}}">TENTANG OBAT</a>
                </li>
                <li>
                    <a href = "{{route('panduan')}}">PANDUAN</a>
                </li>
            </ul>
        </nav>
    
        <h2>Temukan Obat & Kondisi Anda</h2>
        
        <div class="container">
            <form action="" class="searchBar">
                <input type="text" placeholder="Cari Obat" name="cariObat">
                <button type="submit"><img src="{{asset('img/searchIcon.png')}}"> </button>
            </form>
        </div>
        
        <!-- <div class="column-grid">
            <div class="card c0" onclick="showPopup(0)">
                <img src="https://i.pinimg.com/564x/97/00/b7/9700b7cb43f8e17fd4c0e973bbb36821.jpg" alt="Gambar Obat">
                <div class="card-name">OBAT NUROFEN</div>
            </div>
            <div class="card c1" onclick="showPopup(1)">
                <img src="https://i.pinimg.com/564x/c5/0a/f6/c50af693b6972884032e07bbffd17355.jpg" alt="Gambar Obat">
                <div class="card-name">OBAT PARECETAMOL</div>
            </div>
            <div class="card c2" onclick="showPopup(2)">
                <img src="https://i.pinimg.com/564x/20/5c/48/205c48ead79d3ed8f58c1a0dc1ccce26.jpg" alt="Gambar Obat">
                <div class="card-name">OBAT VOLTAREN</div>
            </div>
            <div class="card c3" onclick="showPopup(3)">
                <img src="https://i.pinimg.com/564x/48/c9/99/48c999875d6fab5970513a9a71edcf2c.jpg" alt="Gambar Obat">
                <div class="card-name">OBAT RANIGAST</div>
            </div>
            <div class="card c4" onclick="showPopup(4)">
                <img src="https://i.pinimg.com/564x/62/c1/f2/62c1f2a3c6db32bd391ebd470c5962e6.jpg" alt="Gambar Obat">
                <div class="card-name">OBAT GAVISCON</div>
            </div>
            <div class="card c5" onclick="showPopup(5)">
                <img src="https://i.pinimg.com/564x/3b/a1/f4/3ba1f47bae58c579f9f02232b7afd25a.jpg" alt="Gambar Obat">
                <div class="card-name">OBAT BISOLVON</div>
            </div>
            <div class="card c6" onclick="showPopup(6)">
                <img src="https://d2qjkwm11akmwu.cloudfront.net/products/638089_30-6-2019_22-35-32-1665801908.webp" alt="Gambar Obat">
                <div class="card-name">OBAT DIAPET</div>
            </div>
            <div class="card c7" onclick="showPopup(7)">
                <img src="https://d3bbrrd0qs69m4.cloudfront.net/images/product/apotek_online_k24klik_20220803090741359225_foto-produk-ORLISTAT.png" alt="Gambar Obat">
                <div class="card-name">OBAT ORLISTAT</div>
            </div>
        </div>
        -->
        <div class="container">
    <div class="column-grid">
        @foreach ($obats as $obat)
        <div class="card">
            <a href="{{ asset('storage/' . $obat->foto) }}" target="_blank">
                <img src="{{ asset('storage/' . $obat->foto) }}" alt="{{ $obat->nama_obat }} Foto">
            </a>
            <div class="card-name">{{ $obat->nama_obat }}</div>
            <p>{{ $obat->deskripsi }}</p>
        </div>
        @endforeach
    </div>
</div>


        <div id="popup" class="popup">
            <div class="popup-content">
                <button class="back-button" onclick="closePopup()">Kembali</button>
                <img id="popup-img" w alt="popup Gambar">
                <p id = 'popup-title'></p>
                <p id="popup-text"></p>
            </div>
        </div>

        <div class="button-selengkapnya">
            <div class="button-action">
                <button type="button" >Muat Lebih Banyak</button>
            </div>
        </div>

        <footer class="text-center py-3">
            <div class="container-fluid text-center py-4">
                <div class="row">
                    <h4>OBATIN AJA!</h4>
                    <div class="col-md-4">
                        <h5>Mitra Kami</h5>
                        <ul class="list-unstyled" id="list">
                            <li><a href="https://www.instagram.com/poliban_official/" class="text-white">POLITEKNIK NEGERI BANJARMASIN</a></li>
                            <li><a href="{{route('login')}}" class="text-white">Admin</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>About Us</h5>
                        <ul class="list-unstyled" id="list">
                            <li><a href="https://www.instagram.com/supriansyaahh/" class="text-white">MUHAMMAD SUPRIANSYAH - C030322065</a></li>
                  
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h5>Contact Person</h5>
                        <ul class="list-unstyled" id="list" >
                        <li><a href="https://wa.me/+6281351750693" class="text-white">+62 813-5175-0693</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="{{asset('js/mainScripts/tentangObat.js')}}"></script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</html>