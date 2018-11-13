@extends('layouts.admin')

@section('content')
  <div class="container full-layar">
    <div class="row justify-content-center">
      @if (session('success'))
        <div class="col-md-8">
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
        </div>
      @endif
      @if ($errors->has('senin_kamis'))
        <div class="col-md-8 balasan">
          <br>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal !</strong> {{$errors->first('senin_kamis')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      @endif
      @if ($errors->has('jumat'))
        <div class="col-md-8 balasan">
          <br>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal !</strong> {{$errors->first('jumat')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      @endif
      @if ($errors->has('sabtu'))
        <div class="col-md-8 balasan">
          <br>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal !</strong> {{$errors->first('sabtu')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        </div>
      @endif
      <div class="col-md-8">
        <form action="/update-waktu" method="post">
          {{ csrf_field() }}
          <div class="card">
            <div class="card-header">
              Form Waktu Pelayanan
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="senin_kamis" class="col-sm-2 col-form-label">Senin-Kamis</label>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input required type="text" class="form-control" id="senin_kamis" name="senin_kamis" placeholder="Masukkan Waktu Pelayanan 'Buka-Tutup'" value="{{$waks->waktu_1 ? $waks->waktu_1 : old('senin_kamis')}}">
                    <div class="input-group-append">
                      <span class="input-group-text">WITA</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="jumat" class="col-sm-2 col-form-label">Jum'at</label>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input required type="text" class="form-control" id="jumat" name="jumat" placeholder="Masukkan Waktu Pelayanan 'Buka-Tutup'" value="{{$waks->waktu_2 ? $waks->waktu_2 : old('jumat')}}">
                    <div class="input-group-append">
                      <span class="input-group-text">WITA</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="sabtu" class="col-sm-2 col-form-label">Sabtu</label>
                <div class="col-sm-10">
                  <div class="input-group mb-3">
                    <input required type="text" class="form-control" id="sabtu" name="sabtu" placeholder="Masukkan Waktu Pelayanan 'Buka-Tutup'" value="{{$waks->waktu_3 ? $waks->waktu_3 : old('sabtu')}}">
                    <div class="input-group-append">
                      <span class="input-group-text">WITA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body">
              <input type="hidden" name="_method" value="put">
              <button class="btn btn-primary btn-block">SIMPAN</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
