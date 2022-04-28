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
        <label for="exampleInputEmail1">Notulensi live</label>
        <textarea id="the-textarea" name="notulensi"></textarea><br>
      </div>
      {{-- <input type="submit" value="Submit"> --}}

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
    var timeoutId;
    $('form input, form textarea').on('input propertychange change', function() {
        console.log('Textarea Change');
        
        clearTimeout(timeoutId);
        timeoutId = setTimeout(function() {
            // Runs 1 second (1000 ms) after the last change    
            saveToDB();
        }, 1000);
    });

    function saveToDB()
    {
        console.log('Saving to the db');
        form = $('.contact-form');
        $.ajax({
          url: "/test/store",
          type: "POST",
          data: form.serialize(), // serializes the form's elements.
          beforeSend: function(xhr) {
                  // Let them know we are saving
            $('.form-status-holder').html('Saving...');
          },
          success: function(data) {
            var jqObj = jQuery(data); // You can get data returned from your ajax call here. ex. jqObj.find('.returned-data').html()
                  // Now show them we saved and when we did
                  var d = new Date();
                  $('.form-status-holder').html('Saved! Last: ' + d.toLocaleTimeString());
          },
        });
    }

    // This is just so we don't go anywhere  
    // and still save if you submit the form
    $('.contact-form').submit(function(e) {
      saveToDB();
      e.preventDefault();
    });
    </script>

  </body>
</html>