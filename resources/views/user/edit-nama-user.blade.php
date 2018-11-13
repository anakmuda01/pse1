@extends('layouts.admin')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Ubah Nama
        </div>
        <div class="card-body">
          <form class="form-nama" action="/update-nama-user" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
              <label for="inputPassword" class="col-md-3 col-form-label">Nama Baru</label>
              <div class="col-md-9">
                <input maxlength="20" required type="text" name="nama" class="form-control" id="inputNama" placeholder="Nama anda yang baru">
              </div>
              <div class="col-md-12">
                <br>
                <input type="hidden" name="_method" value="put">
                <button class="btn btn-primary btn-block">Update</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
