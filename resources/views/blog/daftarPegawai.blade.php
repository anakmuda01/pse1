@extends('layouts.app')

@section('content')

<div class="container single-wrap">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card card-pro">
        <div class="card-header text-center">
          DAFTAR PEGAWAI PUSKESMAS SIMPANG EMPAT 1
        </div>
        <div class="card-body">
          <div class="row">
            @foreach ($pegs as $p)
              <div class="col-md-6 col-lg-6 col-xl-4 peg-box my-2">
                <div class="card peg-card mx-auto">
                  <img class="peg-img" src="{{$p->foto}}" alt="{{$p->nama}}">
                  <div class="card-body card-b-peg">
                    <span class="peg-ket"><p><i class="fa fa-user-circle"></i>{{str_limit($p->nama,26)}}</p></span>
                    <span class="peg-ket"><p><i class="fa fa-id-card"></i>{{$p->nip}}</p></span>
                    <span class="peg-ttl"><p><i class="fa fa-calendar"></i><span>{{str_limit($p->tempat_lahir,16)}}, {{$p->tanggal_lahir}}</span></p></span>
                    <span class="peg-ket"><p><i class="fa fa-briefcase"></i>{{str_limit($p->profesi,24)}}</p></span>
                    <span class="peg-ket"><p><i class="fa fa-certificate"></i>{{$p->status}}</p></span>
                    <span class="peg-ket"><p><i class="fa fa-phone"></i>{{$p->telpon}}</p></span>
                    <div class="peg-alamat text-center">
                      <span><i class="fa fa-globe"></i></span>
                      <p id="alamat{{$p->id}}">{{$p->alamat}}</p>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
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
