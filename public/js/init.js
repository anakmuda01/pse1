// tinymce.init({
//   selector: '#text-mce',
//   plugins: [
//   "advlist autolink lists link image charmap print preview hr anchor pagebreak",
//   "searchreplace wordcount visualblocks visualchars code fullscreen",
//   "insertdatetime media nonbreaking save table contextmenu directionality",
//   "emoticons template paste textcolor colorpicker textpattern"
//   ],
//   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
//   theme: 'modern',
//   image_advtab: true,
//  });

var editor_config = {
  path_absolute : "/",
  selector: "#my-editor",
  plugins: [
    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
    "searchreplace wordcount visualblocks visualchars code fullscreen",
    "insertdatetime media nonbreaking save table contextmenu directionality",
    "emoticons template paste textcolor colorpicker textpattern textcolor"
  ],
  image_advtab: true,
  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | forecolor | backcolor",
  image_class_list: [
    {title: 'None', value: ''},
    {title: 'Responsive', value: 'img-fluid'},
  ],
  relative_urls: false,
  setup: function (editor) {
    editor.on('BeforeSetContent', function(e) {
    if (e.content.indexOf("<table") == 0) {
              e.content = '<div class="table-responsive">' + e.content + '</div>';
    }
      });
  },
  file_browser_callback : function(field_name, url, type, win) {
    var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
    var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

    var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
    if (type == 'image') {
      cmsURL = cmsURL + "&type=Images";
    } else {
      cmsURL = cmsURL + "&type=Files";
    }

    tinyMCE.activeEditor.windowManager.open({
      file : cmsURL,
      title : 'Filemanager',
      width : x * 0.8,
      height : y * 0.8,
      resizable : "yes",
      close_previous : "no"
    });
  }
};

tinymce.init(editor_config);
