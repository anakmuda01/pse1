@extends('layouts.admin')

@section('content')
<div class="container full-layar">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profil Ku</div>

                <div class="card-body">

                  <div class="row">
                      @if (session('status'))
                        <div class="col-md-12">
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                        </div>
                      @endif

                      @if (session('success'))
                        <div class="col-md-12">
                          <div class="alert alert-success">
                              {{ session('success') }}
                          </div>
                        </div>
                      @endif

                      <div class="col-md-12">
                        <table>
                          <tbody>
                            <tr>
                              <td style="width:100px;">Nama</td>
                              <td style="width:10px;">:</td>
                              <td>{{Auth::user()->name}}</td>
                            </tr>
                            <tr>
                              <td style="width:100px;">Email</td>
                              <td style="width:10px;">:</td>
                              <td>{{Auth::user()->email}}</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                      <div class="col-md-12">
                        <br>
                        <div class="row justify-content-between">
                          <div class="col-md-12">
                            <a href="/edit-nama-user" class="btn btn-primary">Edit Nama</a>
                          </div>
                          <div class="col-md-12">
                            <br>
                            <a href="/ubah-password" class="btn btn-primary">Ubah Password ?</a>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
