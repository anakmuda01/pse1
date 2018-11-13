@extends('layouts.admin')

@section('content')
  <form method="POST" action="/posts/{{$post->id}}">
       {{ csrf_field() }}
       <div class="container">
         <div class="row justify-content-between">
           {{-- kolom post --}}
           <div class="col-md-8">
             <br>
               <div class="form-group">
                 <label for="judul">Judul Post</label>
                 @if ($errors->has('judul'))
                   <br>
                   <span style="color:red;">{{$errors->first('judul')}}</span>
                 @endif
                 <input required type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul post ..." value="{{$post->judul ? $post->judul : old('judul')}}">
               </div>
               <div class="form-group">
                 <label for="isi_post">Isi Post</label>
                 @if ($errors->has('isi_post'))
                   <br>
                   <span style="color:red;">{{$errors->first('isi_post')}}</span>
                 @endif
                 <textarea class="form-control" name="isi_post" id="my-editor" rows="28">{{$post->isi ? $post->isi : old('isi_post')}}</textarea>
               </div>
           </div>
           {{-- end kolom post --}}

           {{-- kolom featured --}}
           <div class="col-md-4">
             <br>
             <div class="form-group">
               <label for="judul">Tanggal</label>
               @if ($errors->has('tanggal'))
                 <br>
                 <span style="color:red;">{{$errors->first('tanggal')}}</span>
               @endif
              <input required autocomplete="off" required type="text" class="form-control datepicker" name="tanggal" placeholder=" Hari Bulan Tahun" value="{{$post->tanggal ? $post->tanggal : old('tanggal')}}">
             </div>
             <div class="form-group">
               <label for="kategori">Kategori</label>
               @if(session('tag_error'))
                 <br>
                 <span style="color:red;">{{session('tag_error')}}</span>
               @endif
               <div class="input-group mb-3">
                 <select class="form-control" name="kategori[]" id="tags">
                   <option value="99">Pilih Kategori</option>
                   @foreach ($post->tags as $oldTag)
                     @foreach ($tags as $tag)
                       <option id="op{{$tag->nama_tag}}" value="{{$tag->id}}"
                         @if ($oldTag->nama_tag == $tag->nama_tag)
                           selected
                         @endif
                        >{{$tag->nama_tag}}</option>
                     @endforeach
                   @endforeach
                 </select>
                 <div class="input-group-append">
                   <span class="input-group-text">
                     <a class="btn-tag" href="#" data-toggle="modal" data-target="#tagModal1"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                   </span>
                   <span class="input-group-text">
                     <a id="hps-tag" class="btn-tag text-danger" href="#" data-toggle="modal" data-target="#modalTag2"><i class="fa fa-trash" aria-hidden="true"></i></a>
                   </span>
                 </div>
               </div>
             </div>
             <div class="form-group">
               <label for="thumbnail">Gambar Produk</label>
               @if ($errors->has('gambar'))
                 <br>
                  <span style="color:red;">{{$errors->first('gambar')}}</span>
                @endif
               <div class="input-group">
                 <span class="input-group-btn">
                   <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-outline-primary">
                     <i class="fa fa-image"></i> Choose
                   </a>
                 </span>
                 <input required id="thumbnail" class="form-control" type="text" name="gambar" value="{{$post->gambar ? $post->gambar : old('gambar')}}" readonly>
               </div>
             </div>
             <div class="post_img_holder">
               <img alt="{{$post->judul ? $post->judul : old('judul')}}" src="{{$post->gambar ? $post->gambar : old('gambar')}}" id="holder">
             </div>
             <br>
             <input type="hidden" name="_method" value="put">
             <button type="submit" name="submit" class="btn btn-outline-primary btn-block">Submit Post</button>
           </div>
      </div>
    </div>
  </form>


  <!-- Modal -->
  <div class="modal fade" id="tagModal1" tabindex="-1" role="dialog" aria-labelledby="tagModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_tag">Nama Kategori</label>
            <input required type="text" name="nama_tag" class="form-control" id="nama_tag" placeholder="Masukkan nama kategori ..." value="{{old('nama_tag')}}">
          </div>
        </div>
        <div class="modal-footer">
          <button id="add-tag" type="button" class="btn btn-primary" data-dismiss="modal">Tambahkan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal2 -->
  <div class="modal fade" id="modalTag2" tabindex="-1" role="dialog" aria-labelledby="modalTag2Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="div-tag">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
@endsection
