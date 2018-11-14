@extends('layouts.app')

@section('content')

<div class="container single-wrap">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card card-pro">
        <div class="card-header text-center">
          <i class="fa fa-archive mx-2"></i>
          KOTAK KERITIK DAN SARAN ANDA
        </div>
        <div class="card-body">
          <form class="form-komen" action="/save-kersan" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <input maxlength="25" required type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda...">
            </div>
            <div class="form-group mb-0">
              <textarea class="form-control" required maxlength="100" name="body" rows="3" cols="80" placeholder="Masukkan Kritik dan Saran Anda..."></textarea>
            </div>
            <div class="form-group mt-2 mb-0 text-center">
              <button class="btn btn-primary">SIMPAN</button>
            </div>
          </form>
        </div>
        <div class="card-body p-3 mb-0">
          @foreach ($kersans as $k)
            <hr>
            <p class="card-text mx-0 mb-0"><b><i class="fa fa-user-circle"></i> {{$k->nama}} </b> <i>ujuarnya</i> <span class="pull-right"><i class="fa fa-clock-o"></i>{{$k->created_at->diffForHumans()}}</span></p>
            <div class="card-text mx-3">{{$k->body}}</div>
          @endforeach
        </div>
        <div class="card-body p-3 mt-2">
          {{$kersans->links()}}
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
