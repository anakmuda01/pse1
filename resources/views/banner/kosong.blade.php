@extends('layouts.admin')

@section('content')
  <div class="container-fluid">
    <form action="/save-banner-kosong" method="post">
      {{ csrf_field() }}
      <div class="row justify-content-md-center">
        @if (Session::has('msg'))
          <br>
          <div class="col-md-11 alert alert-success alert-dismissible fade show" role="alert">
            <div class="wrap">
              <strong>Sukses !</strong> {{ Session::get('msg') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        @endif
        @if ($errors->has('kosong'))
          <br>
          <div class="col-md-11 alert alert-danger alert-dismissible fade show" role="alert">
            <div class="wrap">
              <strong>Gagal !</strong> {{ Session::get('msg') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
        @endif
        <div class="col-md-11">
          <textarea required class="form-control" name="kosong" id="my-editor2" rows="17">
            {{ $ban->banner ? $ban->banner : old('kosong')}}
          </textarea>
        </div>
        <div class="col-md-11">
          <br>
            <input type="hidden" name="_method" value="put">
            <button class="btn btn-success btn-block">SIMPAN</button>
          <br>
        </div>
      </div>
    </form>
  </div>
@endsection
