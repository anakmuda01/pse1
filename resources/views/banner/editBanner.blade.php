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
          <form action="/update-banner/{{$ban->id}}" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text label-pro">Nama</div>
                  </div>
                  <input required maxlength="40" required type="text" class="form-control" name="nama" placeholder="Masukkan nama ..." value="{{$ban->nama ? $ban->nama : old('nama')}}">
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
                    <input required id="thumbnail" class="form-control" type="text" name="gambar" value="{{$ban->banner ? $ban->banner : old('gambar')}}" readonly>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mx-auto">
                <div class="banner-img-holder">
                  <img name="banner" alt="{{$ban->nama ? $ban->nama : old('nama')}}" src="{{$ban->banner ? $ban->banner : old('banner')}}" id="holder" style="height:auto; width:100%;">
                </div>
              </div>
              <div class="col-md-12">
                <br>
                <textarea name="deskripsi" id="my-editor2" rows="25" cols="80">{{$ban->deskripsi}}</textarea>
              </div>
              <div class="col-md-12">
                <br>
                <input type="hidden" name="_method" value="put">
                <button class="btn btn-success btn-block">UPDATE</button>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
