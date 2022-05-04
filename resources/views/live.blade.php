{{-- <!doctype html>
<textarea style="width:200px; height: 60px;" id="area" placeholder="Write here"></textarea>
<br>
<button onclick="localStorage.removeItem('area');area.value=''">Clear</button>
<script>
    area.value = localStorage.getItem('area');
    area.oninput = () => {
      localStorage.setItem('area', area.value)
    };
</script> --}}

{{-- <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Summernote with Bootstrap 4</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  </head>
  <body>
    <textarea id="summernote" class="yes" value="ok"></textarea>
    <button onclick="localStorage.removeItem('summernote');summernote.value=''">Clear</button>
    <script> --}}
      {{-- // $('#summernote').summernote({
      //   placeholder: 'Hello Bootstrap 4',
      //   tabsize: 2,
      //   height: 100,
      //   code: "sipppp",
      // });
      summernote.oninput = () => {
        localStorage.setItem('summernote', summernote.code)
      };
      summernote.code = localStorage.getItem('summernote');
      $(".yes").summernote("code", localStorage.getItem('summernote'));
      // setInterval(function(){
      //   localStorage.setItem("summernotedata", $("#summernote").summernote("code"));
      // }, 5000); // every 5 second interval
      // onInit: function(e) {
      //   $("#summernote").summernote("code", localStorage.getItem("summernotedata"));
      // };

      
     
      // $(function() {      
      //     setInterval(function(){
      //         localStorage.setItem("summernotedata", $("#summernote").summernote("code"));
      //     }, 5000); // every 5 second interval
      // });
      // callbacks: {
      // onInit: function(e) {
      //     $("#summernote").summernote("code", localStorage.getItem("summernotedata"));
      // },
      // };
    </script>
  </body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tiny.cloud/1/kiparj1384q5s2j5owfutdsordqqp6lq4q2flaj8nj6u79z2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: '#area',
      width: 600,
      height: 300,
      plugins: [
        'autosave', 'export pagebreak', 'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
      ],
      toolbar: 'restoredraft | export | undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
      menu: {
        favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
      },
      menubar: 'favs file edit view insert format tools table help',
      content_css: 'css/content.css',
      autosave_restore_when_empty: true,
      autosave_ask_before_unload: false
    });
 
  </script>
</head>

<body>
  <textarea id="area"></textarea>
  
</body>
</html>