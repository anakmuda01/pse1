@extends('layouts.app')

@section('content')
  {{-- slide on  --}}
  <div id="head-slide" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators slide-bulat">
      <li data-target="#head-slide" data-slide-to="0" class="hov active"></li>
      @foreach ($bans as $i => $b)
        <li class="hov" data-target="#head-slide" data-slide-to="{{$i+1}}"></li>
      @endforeach
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item slide-image active">
        <div class="banner-kosong" style="background-image: url('/img/muka.jpg');"></div>
        <div class="carousel-caption d-md-block caption-kosong animated zoomIn">
          {{-- <h5 class="slide-judul">Sekilas Profile PSE 1</h5>
          <p class="slide-ket lead">Puskesmas Simpang Empat adalah puskesmas rawat jalan yang berjarak 30km dari ibukota kabupaten Banjar, Martapura, dan berjarak 69km dari ibukota propinsi, Banjarmasin. Wilayah kerja Puskesmas Simpang Empat meliputi 2 Kecamatan yang terdiri dari 16 desa, 10 desa masuk di wilayah kecamatan Simpang Empat (S E) dan 6 desa masuk di wilayah Kecamatan Cinta Puri Darusalam (C D).</p> --}}
          {!! $web->banner !!}
        </div>
      </div>
      @foreach ($bans as $i => $b)
        <div class="carousel-item slide-image">
          <a href="/banner/{{$b->slug_nama}}"><img class="d-block w-100 banner-img" src="{{$b->banner}}" alt="slide {{$i+1}}"></a>
        </div>
      @endforeach
    </div>

    <a class="carousel-control-prev" href="#head-slide" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#head-slide" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  {{-- slide off --}}
  <div class="container-fluid op-box">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-xl-4 gaya scroll-animations">
        <div class="animated">
          <div class="box-pro card">
            <div class="card-header box-header text-center bg-transparent">
              <div class="icon-box">
                <div class="icon-wrap">
                  <i class="fa fa-clock-o fa-2x icon-muter" aria-hidden="true"></i>
                </div>
                <div class="box-title">
                  <span>Jadwal Pelayanan</span>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="jadwal-pelayanan">
                <div class="waktu-pelayanan">
                  <div class="hari-buka">Senin-Kamis</div>
                  <div class="waktu-buka">{{$waks->waktu_1}} Wita</div>
                </div>
                <div class="waktu-pelayanan">
                  <div class="hari-buka">Jum'at</div>
                  <div class="waktu-buka">{{$waks->waktu_2}} Wita</div>
                </div>
                <div class="waktu-pelayanan">
                  <div class="hari-buka">Sabtu</div>
                  <div class="waktu-buka">{{$waks->waktu_3}} Wita</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-xl-4 gaya scroll-animations">
        <div class="animated">
          <div class="box-pro card">
            <div class="card-header box-header text-center bg-transparent">
              <div class="icon-box">
                <div class="icon-wrap">
                  <i class="fa fa-stethoscope fa-2x icon-muter" aria-hidden="true"></i>
                </div>
              </div>
              <div class="box-title">
                <span>Daftar Pelayanan Puskesmas</span>
              </div>
            </div>
            <div class="card-body">
              <div class="kontak-body text-center">
                <span class="layanan">Kami memberikan pelayanan terbaik untuk anda.</span>
                <a href="/daftar-pelayanan" class="btn btn-pse">
                  List Pelayanan ->
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-12 col-lg-12 col-xl-4 gaya scroll-animations">
        <div class="animated">
          <div class="box-pro card">
            <div class="card-header box-header text-center bg-transparent">
              <div class="icon-box">
                <div class="icon-wrap">
                  <i class="fa fa-ambulance fa-2x icon-muter" aria-hidden="true"></i>
                </div>
              </div>
              <div class="box-title">
                <span>Nomor Darurat</span>
              </div>
            </div>
            <div class="card-body">
              <div class="kontak-body">
                <span class="telpon">{{$kon->telpon}}</span>
                <span class="email"><i class="fa fa-envelope-o">&nbsp;{{$kon->email}}</i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid quote-wrapper news-box gaya">
    <div class="row">
      <div class="col-md-12">
        <i class="fa fa-quote-right fa-3x quote"></i>
      </div>
      <div class="col-md-12 isi-quote">
        <p>Lebih baik mencegah daripada mengobati.</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 title-wrapper gaya">
        <h1 class="text-center">Berita Terbaru</h1>
      </div>
      @if ($posts->count() > 0)
        @foreach ($posts as $p)
          <div class="col-md-6 col-lg-6 col-xl-4 my-5 gaya">
            <div class="card news-card mx-auto" style="width: 20rem; height: 26rem;">
              <img class="card-img-top" src="{{$p->gambar}}" alt="{{str_limit($p->judul,20)}}">
              <div class="card-body">
                <div class="card-title">
                  <a href="#" class="kategori-link">
                      {{$p->tags[0]->nama_tag}}
                  </a>
                  <span><i class="fa fa-calendar"></i> {{$p->tanggal}}</span>
                </div>
                <h5 class="card-text">{{str_limit($p->judul,75)}}</h5>
              </div>
              <div class="read">
                <a href="/berita/{{$p->slug_judul}}" class="btn read-more mr-1">Baca Selengkapnya</a>
                <span><i class="fa fa-user-circle mr-1"></i>{{str_limit($p->user->name,12)}}</span>
              </div>
            </div>
          </div>
        @endforeach
      @endif

      <div class="col-md-12 mx-auto my-3 gaya text-center">
        <a href="/index-post" class="btn full-berita">Berita Lainnya</a>
      </div>
    </div>
  </div>

  <div class="container-fluid quote-wrapper gaya news-box">
    <div class="row">
      <div class="col-md-12">
        <i class="fa fa-quote-right fa-3x quote"></i>
      </div>
      <div class="col-md-12 isi-quote">
        <p>Waktu dan kesehatan adalah dua aset berharga yang tidak kita kenali dan hargai sampai mereka telah habis.</p>
      </div>
    </div>
  </div>

  <!-- Swiper -->
  <div class="swiper-container gaya swiper-wrap">
    <div class="swiper-wrapper">
      @foreach ($pegs as $p)
        <div class="swiper-slide">
          <div class="imgBx">
            <img src="{{$p->foto}}" alt="{{$p->nama}}">
          </div>
          <div class="details">
            <p>{{str_limit($p->nama,24)}}<br><span>{{$p->profesi}}</span></p>
          </div>
        </div>
      @endforeach
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <div class="container-fluid quote-wrapper gaya news-box animated">
    <div class="row">
      <div class="col-md-12">
        <i class="fa fa-quote-right fa-3x quote"></i>
      </div>
      <div class="col-md-12 isi-quote">
        <p>Kesehatan adalah kata yang besar, soalnya ini mencakup tidak hanya tubuh, tetapi juga pikiran dan jiwa. Bukan sekedar tidak sakit atau kesenangan saja, tetapi seluruh keberadaan dan pandangan manusia.</p>
      </div>
    </div>
  </div>
@endsection
