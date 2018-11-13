@extends('layouts.admin')

@section('content')
  <div class="container-fluid">
    <form action="/save-web-layanan" method="post">
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
        @if ($errors->has('layanan_pkm'))
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
          <textarea class="form-control" name="layanan_pkm" id="my-editor" rows="17">
            @if (!is_null($web))
              {{ $web->layanan ? $web->layanan : old('layanan_pkm')}}
            @else
              {{old('layanan_pkm')}}
            @endif
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
