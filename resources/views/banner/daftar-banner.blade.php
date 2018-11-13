@extends('layouts.admin')

@section('content')
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            DAFTAR BANNER
          </div>
          @if (Session::has('msg'))
          <div class="col-md-12 alert alert-success alert-dismissible fade show" role="alert">
            <div class="wrap">
              <strong>Sukses!</strong> {{ Session::get('msg') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </div>
          @endif
          <div class="col-md-12">
            <br>
            <a href="/add-banner" class="btn btn-primary">Tambah</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Banner</th>
                    <th colspan="2" class="text-center">Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Banner</th>
                    <th colspan="2" class="text-center">Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  @if ($bans->count() > 0)
                    @foreach ($bans as $i => $b)
                      <tr class="no-wrap">
                        <td class="mid">{{$i+1}}</td>
                        <td class="mid">{{$b->nama}}</td>
                        <td class="mid"><img src="{{$b->banner}}" alt="{{$b->nama}}" style="height:200px; width:auto;"></td>
                        <td><a href="/edit-banner/{{$b->id}}" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>
                        <td>
                          <form id="del{{$b->id}}" action="/delete-banner/{{$b->id}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button gol="Banner" btn-name="{{$b->nama}}" data-id="{{$b->id}}" class="btn btn-danger hapus"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <!-- /.container-fluid -->
@endsection
