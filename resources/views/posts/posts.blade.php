@extends('layouts.admin')

@section('content')
      <div class="container-fluid">
        <div class="card mb-3">
          <div class="card-header">
            DAFTAR POST ANDA
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
            <a href="/posts/create" class="btn btn-primary">Tambah</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th class="mid">Edit</th>
                    <th class="mid">Hapus</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Tanggal</th>
                    <th class="mid">Edit</th>
                    <th class="mid">Hapus</th>
                  </tr>
                </tfoot>
                <tbody>
                  @if ($posts->count() > 0)
                    @foreach ($posts as $i => $p)
                      <tr class="no-wrap">
                        <td>{{$i+1}}</td>
                        <td><a target="_blank" href="/posts/{{$p->slug_judul}}"><b>{{$p->judul}}</b></a></td>
                        <td class="mid">
                          @foreach ($p->tags as $tag)
                            {{$tag->nama_tag}}
                          @endforeach
                        </td>
                        <td class="mid">{{$p->tanggal}}</td>
                        <td class="mid"><a href="/posts/{{$p->id}}/edit" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a></td>
                        <td class="mid">
                          <form id="del{{$p->id}}" action="/posts/{{$p->id}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button gol="Post" btn-name="{{$p->judul}}" data-id="{{$p->id}}" class="btn btn-danger hapus"><i class="fa fa-trash"></i></button>
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
