@extends('layouts.app')

@section('content')
  {{-- slide on  --}}
  <div id="head-slide" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators slide-bulat">
      <li data-target="#head-slide" data-slide-to="0" class="hov active"></li>
      <li class="hov" data-target="#head-slide" data-slide-to="1"></li>
      <li class="hov" data-target="#head-slide" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item slide-image active">
        <div class="banner-kosong" style="background-image: url('/img/muka.jpg');"></div>
        <div class="carousel-caption d-md-block caption-kosong">
          <h5 data-aos="zoom-in" class="slide-judul">Sekilas Profile PSE 1</h5>
          <p data-aos="zoom-in" class="slide-ket lead">Puskesmas Simpang Empat adalah puskesmas rawat jalan yang berjarak 30km dari ibukota kabupaten Banjar, Martapura, dan berjarak 69km dari ibukota propinsi, Banjarmasin. Wilayah kerja Puskesmas Simpang Empat meliputi 2 Kecamatan yang terdiri dari 16 desa, 10 desa masuk di wilayah kecamatan Simpang Empat (S E) dan 6 desa masuk di wilayah Kecamatan Cinta Puri Darusalam (C D).</p>
        </div>
      </div>
      <div class="carousel-item slide-image">
        <a href="/blog"><img class="d-block w-100 banner-img" src="{{asset('img/banner_imun.jpg')}}" alt="slide 4"></a>
      </div>
      <div class="carousel-item slide-image">
        <a href="/blog"><img class="d-block w-100 banner-img" src="{{asset('img/banner_gigi.jpg')}}" alt="slide 5"></a>
      </div>
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
      <div data-aos="fade-right" class="col-md-4 scroll-animations">
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
                  <div class="waktu-buka">08.00 - 12.00 Wita</div>
                </div>
                <div class="waktu-pelayanan">
                  <div class="hari-buka">Jum'at</div>
                  <div class="waktu-buka">08.00 - 11.00 Wita</div>
                </div>
                <div class="waktu-pelayanan">
                  <div class="hari-buka">Sabtu</div>
                  <div class="waktu-buka">08.00 - 12.00 Wita</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-aos="fade-right" class="col-md-4 scroll-animations">
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
                <button class="btn btn-pse">
                  List Pelayanan ->
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-aos="fade-right" class="col-md-4 scroll-animations">
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
                <span class="telpon">084299999999</span>
                <span class="email"><i class="fa fa-envelope-o">&nbsp;simpangempat6303@gmail.com</i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div data-aos="fade-right" class="container-fluid quote-wrapper news-box">
    <div class="row">
      <div class="col-md-12">
        <i class="fa fa-quote-right fa-3x quote"></i>
      </div>
      <div class="col-md-12 isi-quote">
        <p>Lebih baik mencegah daripada mengobati.</p>
      </div>
    </div>
  </div>

  <div class="container-fluid">

    <div data-aos="fade-right" class="row animated post-wrap">

      <div class="col-md-2 kategori news-box">
        <ul class="nav my-nav" id="myTab" role="tablist">
          <li class="active">
            <a class="tab-kat nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fa fa-newspaper-o"></i>&nbsp;Semua</a>
          </li>
          <li class="">
            <a class="tab-kat nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fa fa-rocket"></i>&nbsp;Kegiatan PKM</a>
          </li>
          <li class="">
            <a class="tab-kat nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="fa fa-medkit"></i>&nbsp;Kesehatan</a>
          </li>
        </ul>
      </div>

      <div class="col-md-10 isi-kategori">

        <div class="tab-content" id="myTabContent">

          <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="row">
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">SEMUA</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-12 isi-kategori-item news-box animated">
                <div class="card">
                  <div class="card-body">
                    <a href="#" class="btn btn-pse btn-block">Berita lainya..</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row">
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">KEGIATAN PKM</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-12 isi-kategori-item news-box animated">
                <div class="card">
                  <div class="card-body">
                    <a href="#" class="btn btn-pse btn-block">Berita lainya..</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">Penyuluhan</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-4 isi-kategori-item news-box animated">
                <div class="card" style="min-width: 20rem; min-height:25.5rem;">
                  <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body isi-news">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12">
                        <span class="tgl">13 November 2018</span>
                      </div>
                      <div class="col-md-12">
                        <span class="kat">tag : Kesehatan, Penyuluhan</span>
                      </div>
                      <div class="col-md-12">
                        <span class="penulis">oleh Fathurrahman S</span>
                      </div>
                    </div>
                    <a href="#" class="btn btn-pse">Baca selengkapnya..</a>
                  </div>
                </div>
              </div>
              <div data-aos="fade-right" class="col-md-12 isi-kategori-item news-box animated">
                <div class="card">
                  <div class="card-body">
                    <a href="#" class="btn btn-pse btn-block">Berita lainya..</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <div data-aos="fade-right" class="container-fluid quote-wrapper news-box">
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
  <div data-aos="fade-right" class="swiper-container swiper-wrap">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="imgBx">
          <img src="{{asset('img/pegawai/foto-sholihin.jpg')}}" alt="foto-sholihin">
        </div>
        <div class="details">
          <h3>Sholihin<br><span>Programmer</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img src="{{asset('img/pegawai/foto-fathurrahman.jpg')}}" alt="foto-fathurrahman">
        </div>
        <div class="details">
          <h3>Fathurrahman<br><span>Programmer</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img src="{{asset('img/pegawai/foto-1.jpg')}}" alt="foto-sholihin">
        </div>
        <div class="details">
          <h3>Sholihin<br><span>Programmer</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img src="{{asset('img/pegawai/foto-2.jpg')}}" alt="foto-sholihin">
        </div>
        <div class="details">
          <h3>Sholihin<br><span>Programmer</span></h3>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="imgBx">
          <img src="{{asset('img/pegawai/foto-3.jpg')}}" alt="foto-sholihin">
        </div>
        <div class="details">
          <h3>Sholihin<br><span>Programmer</span></h3>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <div data-aos="fade-right" class="container-fluid quote-wrapper news-box animated">
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
