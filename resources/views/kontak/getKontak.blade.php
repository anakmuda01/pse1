@extends('layouts.admin')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      @if (Session::has('msg'))
        <br>
        <div class="col-md-10 alert alert-success alert-dismissible fade show" role="alert">
          <div class="wrap">
            <strong>Sukses !</strong> {{ Session::get('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      @endif
      <div class="col-md-10">
        <div class="card">
          <div class="card-header">
            Panel Kontak Puskesmas
          </div>
          <div class="card-body">
            <form action="/save-kontak" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text label-pro">Telpon</div>
                    </div>
                    <input required type="text" class="form-control" name="telpon" placeholder="Masukkan telpon ..." value="{{$kon->telpon ? $kon->telpon : old('telpon')}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text label-pro">E-Mail</div>
                    </div>
                    <input required type="email" class="form-control" name="email" placeholder="Masukkan email ..." value="{{$kon->email ? $kon->email : old('email')}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <br>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text label-pro">Google Map</div>
                    </div>
                    <input required type="text" class="form-control" name="map" placeholder="misal : -3.2808706,115.0270264" value="{{$kon->map ? $kon->map : old('map')}}">
                  </div>
                </div>
                <div class="col-md-12">
                  <br>
                  <p class="text-center" style="background-color:#e9ecef; border: 1px solid #ced4da;">Alamat</p>
                </div>
                <div class="col-md-12">
                  <textarea style="width:100%;" class="form-control" id="my-editor2" required name="alamat" rows="5" cols="10" placeholder="Masukkan alamat...">{{$kon->alamat ? $kon->alamat : old('alamat')}}</textarea>
                </div>
                <div class="col-md-12">
                  <br>
                  <input type="hidden" name="_method" value="put">
                  <button class="btn btn-success btn-block">SIMPAN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
