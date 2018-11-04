@extends('layouts.app')

@section('content')
<div class="container single-wrap">
  <div class="row justify-content-between">
    <div class="col-md-7 gaya">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="col-md-3 gaya">
      <div class="row">
        <div class="col-md-12">
          <h1>Kategori</h1>
          <ul>
            <li>Semua</li>
            <li>Penyuluhan</li>
            <li>Kesehatan</li>
          </ul>
        </div>
        <div class="col-md-12">
          <h1>Arsip</h1>
          <ul>
            <li>Juli 2018</li>
            <li>Agustus 2018</li>
            <li>September 2018</li>
          </ul>
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
