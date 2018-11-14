@extends('layouts.app')

@section('content')
<div class="container single-wrap">
  <div class="row justify-content-between">
    <div class="my-1 col-md-12 col-lg-12 col-xl-8 gaya">
      <div class="card card-pro">
        <div class="card-header text-center">
          {{ucwords($post->judul)}}
        </div>
        <div class="card-body">
          {!!$post->isi!!}
        </div>
      </div>
      <div class="komentar mt-1">
        <div class="card card-pro">
          <div class="card-header text-center">
            Komentar Post
          </div>
          <div class="card-body p-2">
            <form class="form-komen" action="/save-komen/{{$post->id}}" method="post">
              {{ csrf_field() }}
              <div class="form-group">
                <input maxlength="25" required type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda...">
              </div>
              <div class="form-group mb-0">
                <textarea class="form-control" required maxlength="100" name="isi_komen" rows="3" cols="80" placeholder="Masukkan Komentar Anda..."></textarea>
              </div>
              <div class="form-group mt-2 mb-0 text-center">
                <button class="btn btn-primary">SIMPAN KOMENTAR</button>
              </div>
            </form>
          </div>
          <div class="card-body p-3 mb-0">
            @foreach ($post->komentars as $pk)
              <hr>
              <p class="card-text mx-0 mb-0"><b><i class="fa fa-user-circle"></i> {{$pk->nama}} </b> <i>ujuarnya</i> <span class="pull-right"><i class="fa fa-clock-o"></i>{{$pk->created_at->diffForHumans()}}</span></p>
              <div class="card-text mx-3">{{$pk->komentar}}</div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-lg-12 col-xl-4 gaya">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10 title-wrapper">
          <h1>Kategori</h1>
        </div>
        <div class="col-md-10 col-lg-10 kategori-widget">
          <br>
          <ul>
            @foreach ($tags as $t)
              <li>
                <a href="/kategori/{{$t->slug_tag}}">{{$t->nama_tag}}
                  <span>{{$t->posts->count()}}</span>
                </a>
              </li>
            @endforeach
          </ul>
        </div>
        <div class="col-md-10 col-lg-10 random-post gaya">
          <div class="title-wrapper text-center">
            <h1>Berita Acak</h1>
          </div>
          <div class="row justify-content-center">
            @foreach ($acak as $ac)
              <div class="col-md-6 col-lg-4 col-xl-12 my-3 gaya">
                <div class="card news-card mx-auto" style="width: 14rem; height: 16rem;">
                  <a href="/berita/{{$ac->slug_judul}}" class="link-post-pro">
                    <img class="card-img-top" style="height: 9rem;" src="{{$ac->gambar}}" alt="{{$ac->judul}}">
                    <div class="card-body">
                      <p class="card-text text-center">{{str_limit($ac->judul,60)}}</p>
                    </div>
                  </a>
                </div>
              </div>
            @endforeach
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
    @foreach ($postkats as $pokat)
      <div class="col-md-4 post-berita-lainya gaya">
        <a class="link-post-pro" href="/berita/{{$pokat->slug_judul}}">
          <div class="card mx-auto" style="max-width: 22rem; height:21rem;">
            <img class="card-img-top" src="{{$pokat->gambar}}" alt="{{$pokat->judul}}">
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="card-text">{{str_limit($pokat->judul,70)}}</p>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach
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
