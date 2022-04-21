@extends('layouts.form')

@section('style')

<style>
  .progress { position:relative; width:100%; }
  .bar { background-color: #00ff00; width:0%; height:20px; }
  .percent { position:absolute; display:inline-block; left:50%; color: #040608;}
</style>

@endsection

@section('content')
<div class="section-header bg-white">
    <h1><text>Tambah Notulensi</text></h1>
    <div class="section-header-breadcrumb transparent">
  <a href="documentation.html" class="btn btn-primary btn-lg btn-icon-split btn-block">
    <div>Live Notulensi</div>
  </a>
    </div>
</div>
<form action="/presensi/submit/" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="card card-danger bg-light">
            <div class="card-header">
                {{-- <h1>Presensi</h1> --}}
      
                <div class="ml-auto w-0">
                <label class="switch">
                    <input type="checkbox" class="primary" id="darkSwitch">
                    <span class="slider round" data-checked="fas fa-moon"></span>
                </label>
                </div>
            </div>
            <div class="card-body pb-0">
                <form>
                    <div class="row g-2">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Nomer Undangan:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Tanggal Rapat:</label>
                              <input type="date" class="form-control" id="recipient-name">
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Ruang/Lokasi</label>
                            <br>
                            <div class="form-group">
                                <select class="form-control">
                                  <option selected>Cari</option>
                                  <option>Audtorium</option>
                                  <option>Baak</option>
                                  <option>Pasca</option>
                                </select>
                            </div>                    
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Waktu Rapat:</label>
                              <input type="time" class="form-control" id="recipient-name">
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Pemimpin Rapat</label>
                            <br>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected>Cari</option>
                                    <option value="1">Andhik Ampuh </option>
                                    <option value="2">Desy Intan </option>
                                    <option value="3">Umi Sa'adah</option>
                                    <option value="4">Nailussa`ada </option>
                                    <option value="5">Iwan Syarif</option>
                                    <option value="6">Idris Winarno</option>
                                </select>
                            </div>   
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Notulen Rapat</label>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected>Cari</option>
                                <option value="1">Annisa Arsylia</option>
                                <option value="2">Madani Sofi </option>
                                <option value="3">Tsania Ursila</option>
                                <option value="4">Salwa Fathiyatus </option>
                                <option value="5">Lisa Hidayatus </option>
                                <option value="6">Iga Dwi Lestari</option>
                                </select>
                            </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Jumlah Agenda</label>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected>Cari</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Peserta Rapat</label>
                              <input type="text" class="form-control" id="recipient-name">
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Agenda</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Total Peserta Rapat</label>
                            <div class="form-group">
                                <select class="form-control">
                                    <option selected>Cari</option>
                                <option value="1">5</option>
                                <option value="2">10</option>
                                <option value="3">15</option>
                                <option value="4">20</option>
                                <option value="5">25</option>
                                </select>
                            </div>
                        </div>
                      </div>
                      <div class="row g-2">
                        <div class="col-md">
                            <label for="formFile" class="col-form-label">File Lampiran</label>
                            <input type="file" class="form-control" id="recipient-name">
                        </div>
                        <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Detail Rapat</label>
                              <input type="text" class="form-control" id="recipient-name">
                        </div>
                      </div>
                      <div class="mb-3">
                        <div class="col-md">
                            <label for="formFile" class="col-form-label">Upload File Notulensi</label>
                            <input type="file" class="form-control" id="recipient-name">
                        </div>
                        <!-- <div class="col-md">
                            <label for="recipient-name" class="col-form-label">Tanggal Rapat:</label>
                              <input type="text" class="form-control" id="recipient-name">
                        </div>
                      </div> -->
                </form>
            </div><br>
            <div class="card-footer bg-secondary">
                <button type="button" class="btn btn-danger">Close</button>
            <button type="button" class="btn btn-primary">Save</button>
            </div>
            </div>
        </form>

        @endsection

        @section('script')
        <script type="text/javascript">

        imgInp.onchange = evt => {
        const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
        }
        </script>
<script type="text/javascript">
var SITEURL = "{{URL('/')}}";
$(function() {
  $(document).ready(function()
  {
      var bar = $('.bar');
      var percent = $('.percent');
        $('form').ajaxForm({
          beforeSend: function() {
              var percentVal = '0%';
              bar.width(percentVal)
              percent.html(percentVal);
          },
          uploadProgress: function(event, position, total, percentComplete) {
              var percentVal = percentComplete + '%';
              bar.width(percentVal)
              percent.html(percentVal);
          },
          complete: function(xhr) {
              alert('File Has Been Uploaded Successfully');
              window.location.href = SITEURL +"/";
          }
        });
  });
});

</script>
@endsection
