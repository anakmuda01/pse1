<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/aos.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/swiper.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">


    <!--[if lte IE 9]>
          <link href='/PATH/TO/FOLDER/css/animations-ie-fix.css' rel='stylesheet'>
    <![endif]-->


    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="cover-pse">
          <div class="header head-pse">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-2 col-sm-2 col-md-1 d-md-block d-lg-block d-xl-block">
                  <img src="{{asset('img/logo.png')}}" alt="logo-puskes" id="logo-puskes">
                </div>
                <div class="col-10 col-sm-12 col-md-5">
                  <span id="head-judul">PUSKESMAS SIMPANG EMPAT 1</span>
                </div>
                <div class="col-5 d-none d-sm-none d-md-block d-lg-block d-xl-block">
                  <div class="pull-right">
                    <ul class="sosial-list sosial-list-white">
                      <li>
                        <a href="#" class="fa fa-facebook-square rounded"></a>
                      </li>
                      <li>
                        <a href="https://www.youtube.com/channel/UCOystU7EcxCXvKx3ceJMCLQ" target="_blank" class="fa fa-youtube rounded"></a>
                      </li>
                      <li>
                        <a href="https://www.instagram.com/puskesmas_simpangempat1/" target="_blank" class="fa fa-instagram rounded"></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light navbar-pse animated navi">
              <a class="navbar-brand" href="/"><i class="fa fa-home"></i></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/profil-pse1">Profil Puskesmas</a>
                      <a class="dropdown-item" href="/visi-misi-motto">Visi, Misi dan Motto</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nor nav-link" href="/daftar-pelayanan">Daftar Pelayanan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nor nav-link" href="/daftar-pegawai">Daftar Pegawai</a>
                  </li>
                  <li class="nav-item">
                    <a class="nor nav-link" href="/kontak">Kontak</a>
                  </li>
                </ul>
              </div>
              <div class="tombol-cari">
                <a href="#" class="link-cari rounded"><i class="fa fa-search"></i></a>
              </div>
              <div class="banner-cari animated">
                <form action="/cari" method="post">
                  {{ csrf_field() }}
                  <input type="text" name="cari" class="input-cari" placeholder="Cari di web ini .....">
                </form>
              </div>
            </nav>
          </div>
        </div>


        <main class="content-wrapper">
            @yield('content')
        </main>

        <div class="footer-wrapper">
          <footer id="footer">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foot-widget">
                  <a id="foot-link-logo" href="#">
                    <div class="foot-logo col-xs-12 no-pad">
                      <img src="{{asset('img/logo.png')}}" alt="logo-puskes" id="logo-puskes">
                      <span class="foot-logo-text">Puskesmas Simpang Empat 1</span>
                    </div>
                  </a>
                  <div class="foot-alamat">
                    <div class="col-xs-12 no-pad">
                      <i class="fa fa-globe alamat-icon"></i>
                      Jl. A Yani KM. 68.700 <br>Kecamatan Simpang Empat<br> Kabupaten Banjar <br>Kode Pos 70673
                    </div>
                    <div class="col-xs-12 no-pad">
                      <i class="fa fa-phone kontak-icon"></i>
                      085249999999
                    </div>
                    <div class="col-xs-12 no-pad">
                      <i class="fa fa-envelope kontak-icon"></i>
                      simpangempat6303@gmail.com
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 terkait-foot foot-widget">
                  <div class="foot-widget-title">Link Terkait</div>
                  <div class="terkait-wrap mb-4">
                    <ul>
                      <li><a class="link-terkait" href="http://bkd.banjarkab.go.id/e-simpeg/" target="_blank"><i class="fa fa-link mr-2"></i>E-Simpeg</a></li>
                      <li><a class="link-terkait" href="http://renbut.kemkes.go.id/" target="_blank"><i class="fa fa-link mr-2"></i>Analisis Beban Kerja</a></li>
                        <li><a class="link-terkait" href="https://puskesmassimpangempat.wordpress.com/" target="_blank"><i class="fa fa-link mr-2"></i>Web Lama</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 foot-widget">
                  <div class="foot-widget-title">Media Sosial</div>
                  <div class="sosial-wrap mb-4">
                    <ul>
                      <li><a href="#"><i class="fa fa-facebook fa-2x foot-sosial-icon" ></i></a></li>
                      <li><a href="https://www.youtube.com/channel/UCOystU7EcxCXvKx3ceJMCLQ" target="_blank"><i class="fa fa-youtube fa-2x foot-sosial-icon"></i></a></li>
                      <li><a href="https://www.instagram.com/puskesmas_simpangempat1/" target="_blank"><i class="fa fa-instagram fa-2x foot-sosial-icon"></i></a></li>
                    </ul>
                  </div>
                  <div class="kotak-saran">
                    <a href="/kotak-saran" class="link-saran"><i class="fa fa-archive mx-1" aria-hidden="true"></i>KOTAK KRITIK & SARAN</a>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <div class="bottom-footer">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 foot-widget-bottom">
                  <div class="row">
                    <p class="col-xs-12 col-md-5 no-pad mx-2">PKM Simpang Empat 1 &copy;2018 Design by <a href="https://www.facebook.com/fathurrahman.sholihin">F.S</a></p>
                    <ul class="foot-menu col-xs-12 col-md-7 no-pad">
                      <li><a href="/">Home</a></li>
                      <li><a href="/index-post">Berita</a></li>
                      <li><a href="/profil-pse1">Profil</a></li>
                      <li><a href="/kontak">Kontak</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


<script src="{{ asset('js/jquery-scrolltofixed-min.js')}}" defer></script>
<script src="{{ asset('js/swiper.min.js')}}" defer></script>
<script src="{{ asset('js/master.js')}}" defer></script>
{{-- <script>
  setTimeout(function(){
    navigator.sayswho= (function(){
        var ua= navigator.userAgent, tem,
        M= ua.match(/(opera|chrome|safari|firefox|msie|trident(?=\/))\/?\s*(\d+)/i) || [];
        if(/trident/i.test(M[1])){
            tem=  /\brv[ :]+(\d+)/g.exec(ua) || [];
            return 'IE '+(tem[1] || '');
        }
        if(M[1]=== 'Chrome'){
            tem= ua.match(/\b(OPR|Edge)\/(\d+)/);
            if(tem!= null) return tem.slice(1).join(' ').replace('OPR', 'Opera');
        }
        M= M[2]? [M[1], M[2]]: [navigator.appName, navigator.appVersion, '-?'];
        if((tem= ua.match(/version\/(\d+)/i))!= null) M.splice(1, 1, tem[1]);
        return M.join(' ');
    })();

    console.log(navigator.sayswho);
    var agen = navigator.sayswho;
    var arr = agen.split(" ");

    if(arr[1] < 40) {
      alert("browser anda tidak support ... disarankan menggunakan Google Chrome versi terbaru yang merupakan browser terbaik saat ini")
    }
  },3000);
</script> --}}
</body>
</html>
