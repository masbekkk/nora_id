
{{-- <!DOCTYPE html>
<html>
<head> --}}
@extends('layouts.form')
@section('script')
  <script src="https://cdn.tiny.cloud/1/kiparj1384q5s2j5owfutdsordqqp6lq4q2flaj8nj6u79z2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript">
    tinymce.init({
      selector: '#area',
      // width: 600,
      // height: 300,
      plugins: [
        'autosave', 'export pagebreak', 'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'template', 'help'
      ],
      toolbar: 'restoredraft | export | undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
        'forecolor backcolor emoticons | help',
      menu: {
        favs: { title: 'Agenda Rapat: {{$data->agenda}}', items: 'code visualaid | searchreplace | emoticons' }
      },
      menubar: 'favs file edit view insert format tools table help',
      content_css: 'css/content.css',
      autosave_restore_when_empty: true,
      autosave_ask_before_unload: false
    });
 
  </script>
  @endsection
{{-- </head>

<body> --}}
  @section('content')
  <div class="section-header bg-white">
    <h1>Live Notulensi Acara 
      {{$data->agenda}}
    </h1>
    <div class="section-header-breadcrumb transparent">
      {{-- hanya untuk dipage sekretaris --}}
      {{-- @if(Auth::user()->role_id == 2)
        <a class="btn btn-warning btn-lg" 

            onclick="event.preventDefault();
                          document.getElementById('live-form').submit();">
            {{ __('Simpan Notulensi') }}
        </a>
      @endif --}}
      {{-- untuk dosen dan pegawai tidak ada button ini --}}
    </div>
  </div>
  <form id="live-form" 
  action="{{route('store.live.notulensi', ['id' => $data->id])}}" 
  method="POST" enctype="multipart/form-data">
    @csrf
    {{method_field('PUT')}}
    <textarea id="area" name="notulensi_live" value="{{$data->notulensi_live}}">
      {{$data->notulensi_live}}
    </textarea>
    <br>
    <button type="submit" class="btn btn-warning btn-lg">Simpan Notulensi</button>
  </form>
  @endsection
{{-- </body>
</html> --}}