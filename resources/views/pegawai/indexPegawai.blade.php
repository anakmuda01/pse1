@extends('layouts.admin')

@section('content')
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            DATA PEGAWAI
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
            <a href="/pegawai/create" class="btn btn-primary">Tambah</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>TTL</th>
                    <th>Profesi</th>
                    <th>Status</th>
                    <th>Telpon</th>
                    <th>Alamat</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>TTL</th>
                    <th>Profesi</th>
                    <th>Status</th>
                    <th>Telpon</th>
                    <th>Alamat</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                  </tr>
                </tfoot>
                <tbody>
                  @if ($pegs->count() > 0)
                    @foreach ($pegs as $p)
                      <tr class="no-wrap">
                        <td class="mid">{{$p->nama}}</td>
                        <td>{{$p->nip}}</td>
                        <td>{{$p->tempat_lahir}},&nbsp;{{$p->tanggal_lahir}}</td>
                        <td>{{$p->profesi}}</td>
                        <td>{{$p->status}}</td>
                        <td>{{$p->telpon}}</td>
                        <td>{{str_limit($p->alamat,25)}}</td>
                        <td><a href="/pegawai/{{$p->id}}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>
                        <td>
                          <form id="del{{$p->id}}" action="/pegawai/{{$p->id}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button gol="Pegawai" btn-name="{{$p->nama}}" data-id="{{$p->id}}" class="btn btn-danger hapus"><i class="fa fa-trash"></i></button>
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
