<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <form class="contact-form" action="{{route('test.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Anggota Rapat</label>
        <select class="form-control js-example-basic-multiple" name="users[]" multiple="multiple">
            @foreach($users as $a)
            <option value="{{$a->id}}">{{$a->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email Peserta Rapat</label>
        <input type="text" name="email_peserta">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">tgl</label>
        <input type="date" name="email_peserta" value="2022-07-23">
        <input type="date" value="2013-01-08">

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Notulensi</label>
        <textarea id="area" name="notulensi"></textarea>
      </div>

        <div class="btn-group btn-group-lg" role="group">
            <input type="submit" class="btn btn-info " name="btn_simpan" value="Simpan" data-modal="modal" data-toggle="modal" data-target="#myModal">
            <button type="reset" class="btn btn-danger " name="reset">Bersihkan</button>
        </div>
    </form>
    <div class="form-status-holder"></div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
    </script>
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


  </body>
</html>