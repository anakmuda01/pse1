@extends('layouts.app')

@section('content')

<div class="container single-wrap">
  <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
      <div class="card card-pro kontak-card">
        <div class="card-header text-center">
          KONTAK PUSKESMAS SIMPANG EMPAT 1
        </div>
        <div class="card-body kontak1">
          <p class="card-text"><span><i class="fa fa-phone"></i></span>{{$kon->telpon}}</p>
          <p class="card-text"><span><i class="fa fa-envelope"></i></span>{{$kon->email}}</p>
          <p class="card-text"><span><i class="fa fa-globe"></i></span><a href="https://www.google.com/maps/search/{{$kon->map}}">Ke Google Maps</a></p>
        </div>
        <div class="card-body kontak2">
          <p class="card-text">Alamat :</p>
          {!! $kon->alamat !!}
        </div>
      </div>
    </div>
  </div>
  <br>
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
