@extends('layouts.app')

@section('content')
<div class="container-fluid posts-wrap">
  <div class="row justify-content-between">
    <div class="col-md-12 col-lg-12 col-xl-8">
      <div class="row">
        @if ($posts->count() > 0)
          @foreach ($posts as $p)
            <div class="col-md-6 my-3 gaya">
              <div class="card news-card mx-auto" style="width: 21rem; height: 26rem;">
                <img class="card-img-top" style="height: 14rem;" src="{{$p->gambar}}" alt="{{$p->judul}}">
                <div class="card-body">
                  <div class="card-title">
                    <a href="/kategori/{{$p->tags[0]->slug_tag}}" class="kategori-link">{{$p->tags[0]->nama_tag}}</a>
                    <span><i class="fa fa-calendar"></i> {{$p->tanggal}}</span>
                  </div>
                  <h5 class="card-text">{{$p->judul}}</h5>
                </div>
                <div class="read">
                  <a href="/berita/{{$p->slug_judul}}" class="btn read-more mr-1">Baca Selengkapnya</a>
                  <span><i class="fa fa-user-circle mr-1"></i>{{str_limit($p->user->name,12)}}</span>
                </div>
              </div>
            </div>
          @endforeach
          @foreach ($posts as $p)
            <div class="col-md-6 my-3 gaya">
              <div class="card news-card mx-auto" style="width: 21rem; height: 26rem;">
                <img class="card-img-top" style="height: 14rem;" src="{{$p->gambar}}" alt="{{$p->judul}}">
                <div class="card-body">
                  <div class="card-title">
                    <a href="/kategori/{{$p->tags[0]->slug_tag}}" class="kategori-link">{{$p->tags[0]->nama_tag}}</a>
                    <span><i class="fa fa-calendar"></i> {{$p->tanggal}}</span>
                  </div>
                  <h5 class="card-text">{{$p->judul}}</h5>
                </div>
                <div class="read">
                  <a href="/berita/{{$p->slug_judul}}" class="btn read-more mr-1">Baca Selengkapnya</a>
                  <span><i class="fa fa-user-circle mr-1"></i>{{str_limit($p->user->name,12)}}</span>
                </div>
              </div>
            </div>
          @endforeach
          @foreach ($posts as $p)
            <div class="col-md-6 my-3 gaya">
              <div class="card news-card mx-auto" style="width: 21rem; height: 26rem;">
                <img class="card-img-top" style="height: 14rem;" src="{{$p->gambar}}" alt="{{$p->judul}}">
                <div class="card-body">
                  <div class="card-title">
                    <a href="/kategori/{{$p->tags[0]->slug_tag}}" class="kategori-link">{{$p->tags[0]->nama_tag}}</a>
                    <span><i class="fa fa-calendar"></i> {{$p->tanggal}}</span>
                  </div>
                  <h5 class="card-text">{{$p->judul}}</h5>
                </div>
                <div class="read">
                  <a href="/berita/{{$p->slug_judul}}" class="btn read-more mr-1">Baca Selengkapnya</a>
                  <span><i class="fa fa-user-circle mr-1"></i>{{str_limit($p->user->name,12)}}</span>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <div class="col-md-6 my-3 gaya">
            <h1>Yang pian cari kadada~</h1>
          </div>
        @endif
        <div class="col-md-12 col-lg-12 col-xl-8 mx-auto my-3 text-center">
          {{$posts->links()}}
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
            <li>
              <a href="/index-post">Semua
                <span>{{$tot}}</span>
              </a>
            </li>
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
                      <p class="card-text text-center">{{str_limit($ac->judul,45)}}</p>
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
