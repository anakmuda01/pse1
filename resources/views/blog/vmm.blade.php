@extends('layouts.app')

@section('content')

<div class="container single-wrap">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card card-pro">
        <div class="card-header text-center">
          VISI, MISI dan MOTTO PUSKESMAS SIMPANG EMPAT 1
        </div>
        <div class="card-body">
          {!! $web->visi_misi_motto !!}
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
