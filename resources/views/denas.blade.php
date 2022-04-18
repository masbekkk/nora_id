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
        <h1><text>Cek Presensi</text></h1>
		<div class="section-header-breadcrumb transparent">
		<ol class="breadcrumb bg-white">
            <li class="breadcrumb-item"><a href="/"><text><i class="fas fa-igloo"></i>Beranda</text></a></li>
            <li class="breadcrumb-item"><a href="/user/profile"><text><i class="fas fa-user-graduate"></i> Profil</text></a></li>
		</ol>
		</div>
    </div>
	<form action="/presensi/submit/" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="card card-danger bg-light">
				<div class="card-header">
					<h1>Presensi</h1>
					<div class="ml-auto w-0">
					<label class="switch">
						<input type="checkbox" class="primary" id="darkSwitch">
						<span class="slider round" data-checked="fas fa-moon"></span>
					</label>
					</div>
				</div>
                <div class="card-body pb-0">
                    {{-- @if($sudah == 1) --}}
                    <div class="alert alert-success alert-has-icon">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Kamu Sudah Presensi </div>
                          Terima Kasih Sudah Hadir pada Acara, Have a nice day :)
                        </div>
                      </div>
                    {{-- @elseif($sudah == 0) --}}
                    {{-- @if($status->status == 0) --}}
                    <div class="alert alert-primary alert-has-icon">
                        <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Kamu Belum Presensi </div>
                          Nama Acara : 
                        </div>
                      </div>
                    <div class="form-group">
                        <div class="section-title mt-0"><text>Upload Bukti Kehadiran </text></div>
                        <div class="alert alert-danger alert-has-icon">
                            <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                            <div class="alert-body">
                              <div class="alert-title">Pastikan Bukti yang Kamu Upload Benar</div>
                             Pastikan untuk Mengupload Bukti Kehadiran Sesuai Acaranya ya!
                            </div>
                          </div>
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text  bg-white"><i class="fas fa-spa"></i></span>
                        </div>
                            <input type="file" name="bukti" class="form-control bg-white" id="imgInp"/>
                        </div>
                        <br>
                        <div class="section-title mt-0"><text>Preview Upload </text></div>
                        <div class="ml-2 col-lg-20">
                            <img id="blah" src="https://www.riobeauty.co.uk/images/product_image_not_found.gif" alt="preview upload" style="max-height: 250px;"/>
                        </div>
                    </div>
                    {{-- @if(Auth::user()->kelas == NULL || Auth::user()->divisi == NULL)
                    <div class="btn-group btn-group-lg" role="group">
                        <a class="btn btn-info" value="Simpan" data-toggle="modal" data-target="#exampleModal">Simpan</a>
                        <button type="reset" class="btn btn-danger " name="reset">Bersihkan</button>
                    </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
                            <div class="modal-dialog bg-white">
                            <div class="modal-content bg-white">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Data Profilmu Belum Lengkap</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                </button>
                                </div>
                                <div class="modal-body">
                                Silahkan Lengkapi Data Profilmu
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="/user/profile/edit" class="btn btn-primary">Edit Profil</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    @else --}}
                    <div class="progress">
                      <div class="bar"></div >
                      <div class="percent">0%</div >
                    </div>
                    <br>
                    <div class="btn-group btn-group-lg" role="group">
                        <input type="submit" class="btn btn-info " name="btn_simpan" value="Simpan" data-modal="modal" data-toggle="modal" data-target="#myModal">
                        <button type="reset" class="btn btn-danger " name="reset">Bersihkan</button>
                    </div>
                    {{-- @endif --}}
                    {{-- @else --}}
                    <div class="alert alert-info alert-has-icon">
                        <div class="alert-icon"><i class="fas fa-exclamation"></i></div>
                        <div class="alert-body">
                          <div class="alert-title">Presensi Sudah Ditutup</div>
                        Have a nice day :)
                        </div>
                      </div>
                    {{-- @endif
                    @endif --}}
                </div><br>
                <div class="card-footer bg-secondary"></div>
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
