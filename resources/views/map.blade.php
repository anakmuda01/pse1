@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                  <div style="width: 200px; height: 200px;">
                  {!! Mapper::render() !!}
                  </div>
                  <a href="https://www.google.com/maps/search/{{$map}}">Ke google maps app</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
