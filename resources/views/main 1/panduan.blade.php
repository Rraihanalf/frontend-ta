<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/mainStyles/panduan.css') }}">
    <title>SIPTEK - Panduan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
        body {
            background-image: url('{{ asset('img/rumahsakit.jpg') }}');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }

        #banner {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 80px 0;
        }

        footer {
            background-color: #002b5c; 
            color: white;
        }


        h1 {
            color: black;
        font-weight: bold;
        text-align: center;
        font-size: 42px;
        font-style: italic;
    }
</style>

        <body>
            <nav>
                <div class="Logo">
                    <img src="{{ asset('img/rshdLogo.png') }}" alt="Logo">
                    <p>SIPTEKin</p>
                </div>
                <ul>
                    <li><a href="{{ route('landingPage') }}">BERANDA</a></li>
                    <li><a href="{{ route('mitraKami') }}">MITRA KAMI</a></li>
                    <li><a href="{{ route('tentangObat') }}">TENTANG OBAT</a></li>
                    <li><a href="{{ route('panduan') }}">PANDUAN</a></li>
                </ul>
            </nav>

            <div>
            <div class="container">
                <h1>ADA YANG BISA KAMI BANTU</h1>
                <div class="search-bar">
                    <form action="{{ route('panduan') }}" method="GET" class="searchBar">
                        <input type="text" placeholder="Ketik kata kunci" name="cariPanduan" value="{{ request('cariPanduan') }}">
                        <button type="submit">
                            <img src="{{ asset('img/searchIcon.png') }}" alt="Search Icon">
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <div class="categories">
        @if($panduanList->isEmpty())
            <p>Tidak ada panduan yang cocok dengan kata kunci "{{ $query }}"</p>
        @else
            <div class="category-boxes">
                @foreach($panduanList as $index => $panduan)
                <div class="category-box" onclick="showPopup({{ $index }})">
                    {{ $panduan->title }}
                </div>
                @endforeach
            </div>
        @endif
    </div>

    <!-- Popup modal -->
    <div id="popup" class="popup">
        <div class="popup-content">
            <button class="back-button" onclick="closePopup()">Kembali</button>
            <p id="popup-title"></p>
            <p id="popup-text"></p>
        </div>
    </div>

    <script>
        // Data panduan untuk digunakan di popup
        const panduanList = @json($panduanList);

        function showPopup(index) {
            const panduan = panduanList[index];
            document.getElementById('popup-title').textContent = panduan.title;
            document.getElementById('popup-text').textContent = panduan.description;
            document.getElementById('popup').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }
    </script>
    <!-- Footer modal -->
    <footer class="text-center py-3">
        <div class="container-fluid text-center py-4">
            <div class="row">
                <h4>SIPTEKIN AJA!</h4>
                <div class="col-md-4">
                    <h5>Mitra Kami</h5>
                    <ul class="list-unstyled" id="list">
                    <li><a href="https://www.instagram.com/poliban_official/">POLITEKNIK NEGERI BANJARMASIN</a></li>
                    <li><a href="{{route('login')}}" class="text-white">Admin</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>About Us</h5>
                    <ul class="list-unstyled" id="list">
                        <li><a href="#" class="text-white">Yang Membuat Web ini :</a></li>
                        <li><a href="https://www.instagram.com/supriansyaahh/">MUHAMMAD SUPRIANSYAH - C030322065</a></ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact Person</h5>
                    <ul class="list-unstyled" id="list" >
                    <li><a href="https://wa.me/6281351750693" class="text-white">+62-8135-1750-693</a></li>
                </ul>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3" id="listGambar">
                <a href="#"><img src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png?hl=id" alt="Get it on Google Play" style="width: 150px;"></a>
                <a href="#" class="ms-3"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1280px-Download_on_the_App_Store_Badge.svg.png" alt="Download on the App Store" style="width: 130px; margin-top: 10px;"></a>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>