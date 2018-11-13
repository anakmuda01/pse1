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
          Tambah Pegawai
        </div>
        <div class="card-body">
          <form action="/pegawai/{{$peg->id}}" method="post">
            {{ csrf_field() }}
            <div class="row">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text label-pro">Nama</div>
                      </div>
                      <input required type="text" class="form-control" name="nama" placeholder="Masukkan nama ..." value="{{$peg->nama ? $peg->nama : old('nama')}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <br>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text label-pro">NIP</div>
                      </div>
                      <input required type="text" class="form-control" name="nip" placeholder="Masukkan nip ..." value="{{$peg->nip ? $peg->nip : old('nip')}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <br>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text span-input">Tempat Lahir</span>
                        </div>
                        <input required name="tempat_lahir" type="text" class="form-control" placeholder="Masukkan tempat lahir..." value="{{$peg->tempat_lahir ? $peg->tempat_lahir : old('tempat_lahir')}}">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input autocomplete="off" required type="text" class="form-control datepicker" name="tanggal_lahir" placeholder="Hari Bulan Tahun" value="{{$peg->tanggal_lahir ? $peg->tanggal_lahir : old('tanggal_lahir')}}">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text label-pro">Profesi</div>
                      </div>
                      <input required type="text" class="form-control" name="profesi" placeholder="Masukkan profesi ..." value="{{$peg->profesi ? $peg->profesi : old('profesi')}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <br>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text label-pro">Status</div>
                      </div>
                      <select class="form-control" name="status[]">
                        <option value="99">Pilih Status Pegawai</option>
                        <option value="PNS"
                        @if ($peg->status == "PNS")
                          selected
                        @endif
                        >PNS</option>
                        <option value="Honorer"
                        @if ($peg->status == "Honorer")
                          selected
                        @endif
                        >Honorer</option>
                        <option value="Kontrak"
                        @if ($peg->status == "Kontrak")
                          selected
                        @endif
                        >Kontrak</option>
                        <option value="PTT"
                        @if ($peg->status == "PTT")
                          selected
                        @endif
                        >PTT</option>
                        <option value="TKS"
                        @if ($peg->status == "TKS")
                          selected
                        @endif
                        >TKS</option>
                        <option value="Lainnya"
                        @if ($peg->status == "Lainnya")
                          selected
                        @endif
                        >Lainnya</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <br>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text label-pro">Telpon</div>
                      </div>
                      <input required type="number" class="form-control" name="telpon" placeholder="Masukkan telpon ..." value="{{$peg->telpon ? $peg->telpon : old('telpon')}}">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <br>
                    @if ($errors->has('alamat'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <div class="wrap">
                        <strong>Warning!</strong> {{ $errors->first('alamat') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>
                    @endif
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text label-pro">Alamat</div>
                      </div>
                      <textarea class="form-control" required name="alamat" rows="8" cols="80" placeholder="Masukkan alamat...">{{$peg->alamat ? $peg->alamat : old('alamat')}}</textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="col-md-12">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-btn">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-outline-primary">
                          <i class="fa fa-image"></i> Choose
                        </a>
                      </span>
                      <input required id="thumbnail" class="form-control" type="text" name="gambar" value="{{$peg->foto ? $peg->foto : old('gambar')}}" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mx-auto">
                  <div class="featured_img_holder">
                    <img alt="{{$peg->nama ? $peg->nama : old('nama')}}" src="{{$peg->foto ? $peg->foto : old('gambar')}}" id="holder" style="height:250px; width:250px">
                  </div>
                </div>
                <div class="col-md-12">
                  <br>
                  <input type="hidden" name="_method" value="put">
                  <button class="btn btn-success btn-block">UPDATE</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
