@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    @if (Session::has('msg'))
    <div class="col-md-10 alert alert-warning alert-dismissible fade show" role="alert">
      <div class="wrap">
        <strong>Warning!</strong> {{ Session::get('msg') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
    @endif
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">
          Tambah Banner
        </div>
        <div class="card-body">
          <form action="/save-banner" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text label-pro">Nama</div>
                  </div>
                  <input required maxlength="40" required type="text" class="form-control" name="nama" placeholder="Masukkan nama ..." value="{{old('nama')}}">
                </div>
              </div>

              <div class="col-md-12">
                <br>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-outline-primary">
                        <i class="fa fa-image"></i> Choose
                      </a>
                    </span>
                    <input required id="thumbnail" class="form-control" type="text" name="gambar" value="{{old('gambar')}}" readonly>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mx-auto">
                <div class="banner-img-holder">
                  <img alt="{{old('nama')}}" src="{{old('gambar')}}" id="holder" style="height:auto; width:100%;">
                </div>
              </div>
              <div class="col-md-12">
                <br>
                <textarea name="deskripsi" id="my-editor2" rows="20" cols="80"></textarea>
              </div>
              <div class="col-md-12">
                <br>
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
