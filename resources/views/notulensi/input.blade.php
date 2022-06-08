@extends('layouts.form')

@section('style')
	<style>
		.progress { position:relative; width:100%; }
		.bar { background-color: #00ff00; width:0%; height:20px; }
		.percent { position:absolute; display:inline-block; left:50%; color: #040608;}
	</style>
	    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')
	{{-- Header Section --}}
	<div class="section-header">
		<h1>Tambah Notulensi</h1>
		{{-- <div class="section-header-breadcrumb transparent">
			<a href="documentation.html" class="btn btn-primary btn-lg btn-icon-split btn-block">
				<div><i class="fas fa-file-pen"></i> Tulis Notulensi</div>
			</a>
		</div> --}}
	</div>
	{{-- End Header Section --}}
	
	{{-- Content Form Section --}}
	<div class="section-body">
		<h2 class="section-title">Masukan Data Notulensi</h2>
		<p class="section-lead">Pastikan untuk memasukan sesuatu yang wadidaw</p>
		<form action="{{ route('store.notulensi', ['value' => 1]) }}" id="submit" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card bg-transparent neumorph">
				<div class="card-body pb-0">
					<div class="alert alert-info" role="alert">
						<h5><b>Note</b></h5>
						<p>Pastikan untuk mengisi <b class="h6 font-weight-bold">semua input</b> yang memiliki tanda <span class="text-danger h6">*</span></p>
						<p>Pastikan untuk mengisi <b class="h6 font-weight-bold">salah satu dari input</b> yang memiliki tanda <span class="text-danger h6">**</span></p>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="nomer" class="col-form-label">Nomer Undangan <b class="text-danger">*</b></label>
							<input required type="text" class="form-control" id="nomer" name="no_undangan" value="{{ old('no_undangan') }}">
						</div>
						<div class="col-md">
							<label for="tanggal" class="col-form-label">Tanggal Rapat <b class="text-danger">*</b></label>
							<input required type="date" class="form-control" id="tanggal" name="tgl" value="{{ old('tgl') }}">
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="lokasi" class="col-form-label">Ruang/Lokasi <b class="text-danger">*</b></label>
							<select class="form-control select2" id="lokasi" name="lokasi">
								{{-- <option selected>Cari</option> --}}
								@foreach($lokasi as $a)
									<option value="{{$a->nama}}">{{$a->nama}}</option>
								@endforeach
							</select>         
						</div>
						<div class="col-md">
							<label for="waktu" class="col-form-label">Waktu Rapat <b class="text-danger">*</b></label>
							<input type="time" class="form-control" id="waktu" name="waktu" value="{{ old('waktu') }}">
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="pemimpin" class="col-form-label">Pemimpin Rapat <b class="text-danger">*</b></label>
							<select required class="form-control select2" id="pemimpin" name="id_pemimpin_rapat">
								{{-- <option selected>Cari</option> --}}
								@foreach($pimpinan_rapat as $a)
									@if(old('id_pemimpin_rapat')==$a->id)
										<option selected value= {{ $a->id }} selected>{{ $a->nama }}</option>
									@else
										<option value= {{ $a->id }} >{{ $a->nama }}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="col-md">
							<label for="jenis-agenda" class="col-form-label">Jenis Rapat <b class="text-danger">*</b></label>
							<select required class="form-control select2" id="jenis-agenda" name="id_jenis_rapat">
								{{-- <option selected>Cari</option> --}}
								@foreach($jenis_rapat as $a)
								@if(old('id_jenis_rapat')==$a->id)
										<option value= {{ $a->id }} selected>{{ $a->nama }}</option>
									@else
										<option value= {{ $a->id }} >{{ $a->nama }}</option>
									@endif
								{{-- <option value="{{$a->id}}">{{$a->nama}}</option> --}}
								@endforeach
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="total-peserta" class="col-form-label">Peserta Rapat <b class="text-danger">*</b></label>
							<select required class="form-control select2" id="total-peserta" name="tamu[]" multiple="multiple">
								{{-- <option selected>Cari</option> --}}
								@foreach($pegawai as $a)
									<option value="{{$a->name}}">{{$a->name}}</option>
								@endforeach
							</select>
						</div>
						{{-- <div class="col-md">
							<label for="detail" class="col-form-label">Detail Rapat <b class="text-danger">*</b></label>
							<textarea class="form-control" id="detail" name="detail_rapat">{{ old('detail_rapat') }}</textarea>
						</div> --}}
					</div>
					<div class="row">
						<div class="col-md">
							<label for="agenda" class="col-form-label">Jumlah Agenda</label>
							<input type="number" class="form-control" id="agenda" name="jml_agenda" value="{{ old('jml_agenda') }}">
						</div>
						<div class="col-md">
							<label for="notulensi" class="col-form-label">Agenda</label>
							<input type="text" class="form-control" id="notulensi" name="agenda" value="{{ old('agenda') }}">
						</div>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="detail" class="col-form-label">Detail Rapat </label><br>
							<textarea class="form-control" id="area" name="detail_rapat">{{ old('detail_rapat') }}</textarea>
						</div>
					</div>
					<br>
					<div class="alert alert-danger" role="alert">
						<b>Masukkan File .csv peserta rapat, atau isi secara manual</b><br>
						<small>Format csv harus data index ke 2 berisi email, contoh: 1,budi, budi@gmail.com</small>
						<p>Contoh File format .csv yang benar <u><a target="blank" href="files/Book1.csv">Download File</a></u></p>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="peserta" class="col-form-label">File Tamu Rapat (.csv)</label><br>
							<input type="file" class="form-control" id="peserta" name="file_peserta_rapat">
						</div>
						<div class="col-md">
							<label for="detail" class="col-form-label">Email Tamu Rapat</label>
							<input type="text" class="form-control" id="detail" name="peserta_rapat" value="{{ old('peserta_rapat') }}">
						</div>
						<div class="col-md">
							<label for="detail" class="col-form-label">Jumlah Tamu Rapat</label>
							<input type="number" class="form-control" id="detail" name="jml_peserta_rapat" value="{{ old('jml_peserta_rapat') }}">
						</div>
					</div>
					<br>
					<div class="alert alert-danger" role="alert">
						<b>Upload File Notulensi jika tidak menulis notulensi secara langsung</b>
					</div>
					<div class="row">
						<div class="col-md">
							<label for="notulensi" class="col-form-label">Unggah File Notulensi <b class="text-danger">**</b></label>
							<input type="file" class="form-control" id="notulensi" name="file_notulensi">
						</div>
						<div class="col-md">
							<label for="summernote" class="col-form-label">Tulis Notulensi <b class="text-danger">**</b></label>
							<br>
							{{-- <textarea id="area"></textarea> --}}
							{{-- <button class="btn btn-warning btn-lg" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								<i class="fas fa-file-pen"></i> Tulis Notulensi
							</button> --}}
							<button type="button" class="btn btn-warning btn-lg oEbutn" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fas fa-file-pen"></i> Tulis Notulensi</button>
						</div>
					</div> 
					<div class="row collapse" id="collapseExample">
						<div class="col-md">
							<label for="tulis" class="col-form-label">Tulis Notulensi </label><br>
							<textarea class="form-control" id="live" name="notulensi_rapat">{{ old('notulensi_rapat') }}</textarea>
						</div>
					</div>
				</div>
				<div class="card-footer text-right bg-transparent">
					{{-- <button type="button" class="btn btn-danger">Close</button> --}}
					<button type="submit" class="btn btn-primary btn-lg">Simpan</button>
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
			$('.select2').select2({
				
			});
		});
		$(".oEbutn").click(function() {
			$(this).closest("form").attr("action", "{{route('store.notulensi', ['value' => 2])}}");
			// $('#submit').attr('action', 'store/notulensi/2');       
		});
	</script>
 <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
 <script>
	$('#area').summernote({
		height: 100,
        dialogsInBody: true
	});
  </script>
    <script src="https://cdn.tiny.cloud/1/kiparj1384q5s2j5owfutdsordqqp6lq4q2flaj8nj6u79z2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
	<script type="text/javascript">
		  tinymce.init({
			  selector: '#live',
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
				  favs: { title: 'Agenda Rapat: ', items: 'code visualaid | searchreplace | emoticons' }
			  },
			  menubar: 'favs file edit view insert format tools table help',
			  content_css: 'css/content.css',
			  autosave_restore_when_empty: true,
			  autosave_ask_before_unload: false
		  });
	</script>
@endsection
