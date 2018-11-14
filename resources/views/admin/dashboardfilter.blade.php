@extends('layouts.admin')

@section('content')
      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-secondary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-cog"></i>
                  </div>
                  <div class="mr-5">{{$tot}} Post!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/dashboard">
                  <span class="float-left">Semua Kategori</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            @foreach ($tags as $t)
              <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-secondary o-hidden h-100">
                  <div class="card-body">
                    <div class="card-body-icon">
                      <i class="fas fa-fw fa-cog"></i>
                    </div>
                    <div class="mr-5">{{$t->posts->count()}} Post!</div>
                  </div>
                  <a class="card-footer text-white clearfix small z-1" href="/kat/{{$t->slug_tag}}">
                    <span class="float-left">{{$t->nama_tag}}</span>
                    <span class="float-right">
                      <i class="fas fa-angle-right"></i>
                    </span>
                  </a>
                </div>
              </div>
            @endforeach
          </div>

        {{-- <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div> --}}

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="mid">No</th>
                    <th class="mid">Judul</th>
                    <th class="mid">Kategori</th>
                    <th class="mid">Tanggal</th>
                    <th class="mid">Penulis</th>
                    @if (Auth::user()->isAdmin())
                      <th class="mid">Hapus</th>
                    @endif
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th class="mid">No</th>
                    <th class="mid">Judul</th>
                    <th class="mid">Kategori</th>
                    <th class="mid">Tanggal</th>
                    <th class="mid">Penulis</th>
                    @if (Auth::user()->isAdmin())
                      <th class="mid">Hapus</th>
                    @endif
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($posts as $i => $p)
                    <tr class="no-wrap">
                      <td class="mid">{{$i+1}}</td>
                      <td><a target="_blank" href="/posts/{{$p->slug_judul}}">{{$p->judul}}</a></td>
                      <td class="mid">{{$p->tags[0]->nama_tag}}</td>
                      <td class="mid">{{$p->tanggal}}</td>
                      <td class="mid">{{$p->user->name}}</td>
                      @if (Auth::user()->isAdmin())
                        <td class="mid">
                          <form id="del{{$p->id}}" action="/posts-list/{{$p->id}}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="delete">
                            <button gol="Post" btn-name="{{$p->judul}}" data-id="{{$p->id}}" class="btn btn-danger hapus"><i class="fa fa-trash"></i></button>
                          </form>
                        </td>
                      @endif
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2018</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->
@endsection
