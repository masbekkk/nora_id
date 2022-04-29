@extends('layouts.form')

@section('style')
	<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
	<style>
		.progress { position:relative; width:100%; }
		.bar { background-color: #00ff00; width:0%; height:20px; }
		.percent { position:absolute; display:inline-block; left:50%; color: #040608;}
	</style>
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
								<input type="text" class="form-control" id="nomer">
							</div>
							<div class="col-md">
								<label for="tanggal" class="col-form-label">Tanggal Rapat</label>
								<input type="date" class="form-control" id="tanggal">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="lokasi" class="col-form-label">Ruang/Lokasi</label>
								<select class="form-control" id="lokasi">
									<option selected>Cari</option>
									<option>Audtorium</option>
									<option>Baak</option>
									<option>Pasca</option>
								</select>         
							</div>
							<div class="col-md">
								<label for="waktu" class="col-form-label">Waktu Rapat</label>
								<input type="time" class="form-control" id="waktu">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="pemimpin" class="col-form-label">Pemimpin Rapat</label>
								<select class="form-control" id="pemimpin">
									<option selected>Cari</option>
									<option value="1">Andhik Ampuh</option>
									<option value="2">Desy Intan</option>
									<option value="3">Umi Sa'adah</option>
									<option value="4">Nailussa`ada</option>
									<option value="5">Iwan Syarif</option>
									<option value="6">Idris Winarno</option>
								</select>
							</div>
							<div class="col-md">
								<label for="notulen" class="col-form-label">Notulen Rapat</label>
								<select class="form-control" id="notulen">
									<option selected>Cari</option>
									<option value="1">Annisa Arsylia</option>
									<option value="2">Madani Sofi</option>
									<option value="3">Tsania Ursila</option>
									<option value="4">Salwa Fathiyatus</option>
									<option value="5">Lisa Hidayatus</option>
									<option value="6">Iga Dwi Lestari</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="jenis-agenda" class="col-form-label">Jenis Agenda</label>
								<select class="form-control" id="jenis-agenda">
									<option selected>Cari</option>
									<option value="online">Online</option>
									<option value="offline">Offline</option>
								</select>
							</div>
							<div class="col-md">
								<label for="peserta" class="col-form-label">Peserta Rapat</label>
								<input type="file" class="form-control" id="peserta">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="agenda" class="col-form-label">Agenda</label>
								<input type="text" class="form-control" id="agenda">
							</div>
							<div class="col-md">
								<label for="total-peserta" class="col-form-label">Total Peserta Rapat</label>
								<select class="form-control" id="total-peserta">
									<option selected>Cari</option>
									<option value="1">5</option>
									<option value="2">10</option>
									<option value="3">15</option>
									<option value="4">20</option>
									<option value="5">25</option>
								</select>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="dokumentasi" class="col-form-label">File Dokumentasi</label>
								<input type="file" class="form-control" id="dokumentasi">
							</div>
							<div class="col-md">
								<label for="detail" class="col-form-label">Detail Rapat</label>
								<input type="text" class="form-control" id="detail">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="notulensi" class="col-form-label">Unggah File Notulensi</label>
								<input type="file" class="form-control" id="notulensi">
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<label for="summernote" class="col-form-label">Tulis Notulensi</label>
								<textarea id="summernote" name="editordata"></textarea>
							</div>
						</div> 
						<!-- <div class="col-md">
								<label for="recipient-name" class="col-form-label">Tanggal Rapat:</label>
								<input type="text" class="form-control" id="recipient-name">
							</div>
						</div> -->
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
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
	<script type="text/javascript">
		$('#summernote').summernote({
			placeholder: 'Notulensi Rapat...',
			height: 400
		});
	</script>
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
@endsection
