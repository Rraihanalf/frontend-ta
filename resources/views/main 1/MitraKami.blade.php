<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPTEK-AJA</title>
    <link rel="stylesheet" href="{{asset('css/mainStyles/MitraKami.css')}}">
</head>

<body>
    <nav>
        <div class="Logo">
            <img src="{{asset('img/rshdLogo.png')}}" alt="Logo">
            <p>SIPTEK</p>
        </div>
        <ul>
            <li><a href="{{route('landingPage')}}">BERANDA</a></li>
            <li><a href="{{route('mitraKami')}}">MITRA KAMI</a></li>
            <li><a href="{{route('tentangObat')}}">TENTANG OBAT</a></li>
            <li><a href="{{route('panduan')}}">PANDUAN</a></li>
        </ul>
    </nav>

    <div class="Mitra Kami">
        <h1>MITRA KAMI</h1>
        <div class="carousel-container">
            <div class="carousel-slide">
                @foreach ($mitraData as $mitra)
                    <div class="carousel-item">
                        <a href="{{ $mitra->link }}" target="_blank">
                            <img src="{{ asset('storage/' . $mitra->logo) }}" alt="{{ $mitra->namaMitra }} Logo">
                        </a>
                        <p>{{ $mitra->namaMitra }}</p>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

    <div class="social-media">
        <h2>SOCIAL MEDIA KAMI</h2>
        <div class="social-icons">
            <a href="https://www.instagram.com" target="_blank" class="icon-box">
                <img src="{{asset('img/instagram.png')}}" alt="Instagram Logo">
                <p>@SIPTEK</p>
            </a>
            <a href="https://www.facebook.com" target="_blank" class="icon-box">
                <img src="{{asset('img/facebook.png')}}" alt="Facebook Logo">
                <p>SIPTEK-AJA</p>
            </a>
            <a href="https://www.tiktok.com" target="_blank" class="icon-box">
                <img src="{{asset('img/tik-tok.png')}}" alt="TikTok Logo">
                <p>SIPTEK-AJA</p>
            </a>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h4>SIPTEK AJA!</h4>
            </div>
            <div class="footer-links">
                <div class="footer-column">
                    <h5>Mitra Kami</h5>
                    <div class="rata">
                        <li><a href="https://www.instagram.com/poliban_official/">POLITEKNIK NEGERI BANJARMASIN</a></li>
                        <li><a href="{{route('login')}}" class="text-white">Admin</a></li>
                    </div>
                </div>
                <div class="footer-column">
                    <h5>About Us</h5>
                    <ul>
                        <li><a href="#">Yang Membuat Web ini :</a></li>
                        <li><a href="https://www.instagram.com/supriansyaahh/">MUHAMMAD SUPRIANSYAH - C030322065</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h5>Contact Person</h5>
                    <div class="ipo">
                    <li><a href="https://wa.me/6281351750693" class="text-white">+62-8135-1750-693</a></li>
                </ul>
                </div>
            </div>
            </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{asset('js/mainScripts/MitraKami.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>