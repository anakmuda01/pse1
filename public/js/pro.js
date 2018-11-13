$(document).ready(function(){
  $('#lfm').filemanager('image');

  $('.hapus').on('click', function(e){
    e.preventDefault();
    var judul = $(this).attr('btn-name');
    var idbtn = $(this).attr('data-id');
    var gol = $(this).attr('gol');
    console.log(judul+' '+idbtn+' '+gol);
    swal({
      title: "HAPUS DATA "+gol+" dari <br> <span class='judul-hps'>"+judul+"</span> ?",
      html: '<p class="psn-warning">Data yang telah dihapus tidak bisa dikembalikan lagi ...</p>',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, hapus data!',
      cancelButtonText: 'No, gak jadi!',
      confirmButtonClass: 'btn btn-danger tombol-hps btn-lg',
      cancelButtonClass: 'btn btn-success',
      buttonsStyling: false,
      focusConfirm: false,
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        swal(
          'Terhapus!',
          'Data dari <span class="judul-hps">'+judul+'</span> telah dihapus.',
          'success'
        ).then((result) => {
          if (result.value){
            $('#del'+idbtn).submit();
          }else{
            $('#del'+idbtn).submit();
          }
        })
      } else if (
        // Read more about handling dismissals
        result.dismiss === swal.DismissReason.cancel
      ) {
        swal(
          'Gak jadi dihapus~',
          '',
          'error'
        )
      }
    })
  });

  tinymce.init({
    selector: '#my-editor2',
    plugins: [
      "textcolor colorpicker textpattern textcolor"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | forecolor | backcolor",
  });


  $('#add-tag').click(function(e){
    e.preventDefault();
    var n = $('#nama_tag').val();
    // console.log(nama);
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
    $.ajax({
    url: '/save-tag',
    type: 'POST',
    data: {
      nama : n,
    },
    success: function(result){
      if (result.respon == 'sukses') {
          alert('sukses');
          $('#tags').append("<option id='op"+result.nama_tag+"' value='"+result.id+"'>"+result.nama_tag+"</option>");

      } else if (result.errors) {
        alert('Kategori gagal ditambahkan..');
      }
    }});
  });

  $('#hps-tag').on('click', function(e){
    $('.tag-hapus').remove();
    e.preventDefault();
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });
    $.ajax({
    url: '/get-tag',
    type: 'GET',
    success: function(data){
      for (var i = 0; i < data.length; i++) {
        $('#div-tag').append(
          '             <div id="d'+data[i].id+'" class="tag-hapus form-group">  '  +
          '               <div class="input-group mb-3">  '  +
          '                 <input readonly type="text" value="'+data[i].nama_tag+'" class="form-control">  '  +
          '                 <div class="input-group-append">  '  +
          '                   <span class="input-group-text">  '  +
          '                     <a id="'+data[i].id+'" class="btn-tag btn-del text-danger" href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>  '  +
          '                   </span>  '  +
          '                 </div>  '  +
          '               </div>  '  +
          '            </div>  '
        );
      }
    }});
  });

$('#div-tag').on('click','.btn-del',function(e){
  var id_tag = $(this).attr('id');

    $.ajaxSetup({
     headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
    $.ajax({
    url: '/del-tag',
    type: 'DELETE',
    data: {
     id : $(this).attr('id')
    },
    success: function(data){
     if(data.success == "OK"){
       alert('Berhasil dihapus~');
       $('#d'+data.id).remove();
       $('#op'+data.nama_tag).remove();
     }else{
       alert('Gagal~ : Silahkan Hapus Post yang termasuk dalam kategori ini terlebih dahulu')
     }
    }});
});

});

// $.ajaxSetup({
//    headers: {
//        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//    }
//  });
//  $.ajax({
//  url: '/del-tag',
//  type: 'delete',
//  data: {
//    id : $(this).id
//  },
//  success: function(data){
//    if(data.success == "OK"){
//      alert('Berhasil dihapus~')
//    }else(
//      alert('Gagal~')
//    );
//  }});
