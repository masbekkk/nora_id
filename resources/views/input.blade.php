@extends('layouts.form')

@section('style')
	<style>
		.progress { position:relative; width:100%; }
		.bar { background-color: #00ff00; width:0%; height:20px; }
		.percent { position:absolute; display:inline-block; left:50%; color: #040608;}
	</style>
	    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
	{{-- Header Section --}}
	<div class="section-header">
		<h1>Tambah Notulensi</h1>
		<div class="section-header-breadcrumb transparent">
			<a href="documentation.html" class="btn btn-primary btn-lg btn-icon-split btn-block">
				<div><i class="fas fa-file-pen"></i> Tulis Notulensi</div>
			</a>
		</div>
	</div>
	{{-- End Header Section --}}
	
	{{-- Content Form Section --}}
	<div class="section-body">
		<h2 class="section-title">Masukan Data Notulensi</h2>
		<p class="section-lead">Pastikan untuk memasukan sesuatu yang wadidaw</p>
		<form action="#" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card card-danger bg-light">
				{{-- <div class="card-header">
					<div class="ml-auto w-0">
						<label class="switch">
							<input type="checkbox" class="primary" id="darkSwitch">
							<span class="slider round" data-checked="fas fa-moon"></span>
						</label>
					</div>
				</div> --}}
				<div class="card-body pb-0">
					<form>
						<div class="row">
							<div class="col-md">
								<label for="nomer" class="col-form-label">Nomer Undangan</label>
								<input type="text" class="form-control" id="nomer" name="no_undangan">
							</div>
							<div class="col-md">
								<label for="tanggal" class="col-form-label">Tanggal Rapat</label>
								<input type="date" class="form-control" id="tanggal" name="tgl">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="lokasi" class="col-form-label">Ruang/Lokasi</label>
								<select class="form-control select2" id="lokasi" name="lokasi">
									{{-- <option selected>Cari</option> --}}
									@foreach($lokasi as $a)
										<option value="{{$a->nama}}">{{$a->nama}}</option>
									@endforeach
								</select>         
							</div>
							<div class="col-md">
								<label for="waktu" class="col-form-label">Waktu Rapat</label>
								<input type="time" class="form-control" id="waktu" name="waktu">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="pemimpin" class="col-form-label">Pemimpin Rapat</label>
								<select class="form-control select2" id="pemimpin" name="id_pemimpin_rapat">
									{{-- <option selected>Cari</option> --}}
									@foreach($pegawai as $a)
										<option value="{{$a->id}}">{{$a->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="jenis-agenda" class="col-form-label">Jenis Rapat</label>
								<select class="form-control select2" id="jenis-agenda" name="id_jenis_rapat">
									{{-- <option selected>Cari</option> --}}
									@foreach($jenis_rapat as $a)
									<option value="{{$a->id}}">{{$a->nama}}</option>
									@endforeach
								</select>
							</div>
							<div class="col-md">
								<label for="peserta" class="col-form-label">Peserta Rapat</label>
								<input type="file" class="form-control" id="peserta" name="peserta_rapat">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="agenda" class="col-form-label">Jumlah Agenda</label>
								<input type="number" class="form-control" id="agenda" name="jml_agenda">
							</div>
							<div class="col-md">
								<label for="total-peserta" class="col-form-label">Tamu Rapat</label>
								<select class="form-control select2" id="total-peserta" name="tamu[]" multiple="multiple">>
									{{-- <option selected>Cari</option> --}}
									@foreach($pegawai as $a)
									<option value="{{$a->name}}">{{$a->name}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="row">
							
							<div class="col-md">
								<label for="detail" class="col-form-label">Detail Rapat</label>
								<textarea class="form-control" id="detail" name="detail_rapat"></textarea>
							</div>
						</div>
						<br>
						<div class="alert alert-warning" role="alert">
							<b> Upload File Notulensi jika tidak menulis notulensi secara langsung</b>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="notulensi" class="col-form-label">Agenda</label>
								<input type="text" class="form-control" id="notulensi" name="agenda">
							</div>
							<div class="col-md">
								<label for="notulensi" class="col-form-label">Unggah File Notulensi</label>
								<input type="file" class="form-control" id="notulensi" name="file_notulensi">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<br>
								<label for="summernote" class="col-form-label">Tulis Notulensi</label>
								<br>
								{{-- <textarea id="area"></textarea> --}}
								<a href="/live" class="btn btn-warning btn-lg"><i class="fas fa-file-pen"></i> Tulis Notulensi</a>
							</div>
						</div> 
						
					</form>
				</div>
				<br>
				<div class="card-footer text-right bg-secondary">
					{{-- <button type="button" class="btn btn-danger">Close</button> --}}
					<button type="button" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
	{{-- End Content Form Section --}}
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
			$(document).ready(function() {
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
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
		 $(document).ready(function() {
			$('.select2').select2();
		});
	</script>
@endsection
