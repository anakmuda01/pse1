@extends('layouts.app')

@section('content')
<div class="container single-wrap">
  <div class="row justify-content-between">
    <div class="my-4 col-md-12 col-lg-12 col-xl-8 gaya">
      {!!$post->isi!!}
    </div>
    <div class="col-md-12 col-lg-12 col-xl-4">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 title-wrapper gaya">
          <h1>Kategori</h1>
        </div>
        <div class="col-md-10 col-lg-10 kategori-widget">
          <br>
          <ul>
            <li>
              <a href="#" class="cat-1">Kegiatan PKM
                <span>10</span>
              </a>
            </li>
            <li>
              <a href="#" class="cat-2">Kesehatan
                <span>25</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-10 col-lg-10 random-post gaya">
          <div class="title-wrapper text-center">
            <h1>Berita Acak</h1>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-12 my-3 gaya">
              <div class="card news-card mx-auto" style="width: 14rem; height: 16rem;">
                <a href="#" class="link-post-random">
                  <img class="card-img-top" style="height: 9rem;" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-12 my-3 gaya">
              <div class="card news-card mx-auto" style="width: 14rem; height: 16rem;">
                <a href="#" class="link-post-random">
                  <img class="card-img-top" style="height: 9rem;" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-12 my-3 gaya">
              <div class="card news-card mx-auto" style="width: 14rem; height: 16rem;">
                <a href="#" class="link-post-random">
                  <img class="card-img-top" style="height: 9rem;" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-12 my-3 gaya">
              <div class="card news-card mx-auto" style="width: 14rem; height: 16rem;">
                <a href="#" class="link-post-random">
                  <img class="card-img-top" style="height: 9rem;" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
                  <div class="card-body">
                    <p class="card-text text-center">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row row-berita-lainya">
    <div class="col-md-12 post-berita-lainya gaya">
      <div class="judul-wrap">
        <span class="judul-isi"><i class="fa fa-newspaper-o"></i> Berita Lainnya</span>
      </div>
    </div>
    <div class="col-md-4 post-berita-lainya gaya">
      <a class="link-berita" href="#">
        <div class="card mx-auto" style="max-width: 22rem; max-height:28rem;">
          <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h5 class="card-title">Card title Card title Card title Card title Card title</h5>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 post-berita-lainya gaya">
      <a class="link-berita" href="#">
        <div class="card mx-auto" style="max-width: 22rem; max-height:28rem;">
          <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h5 class="card-title">Card title Card title Card title Card title Card title</h5>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 post-berita-lainya gaya">
      <a class="link-berita" href="#">
        <div class="card mx-auto" style="max-width: 22rem; max-height:28rem;">
          <img class="card-img-top" src="{{asset('img/gambar1.jpg')}}" alt="Card image cap">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <h5 class="card-title">Card title Card title Card title Card title Card title</h5>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="container-fluid quote-wrapper gaya">
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
