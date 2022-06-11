@extends('layouts.form')

@section('style')
	<style>
		.progress { position:relative; width:100%; }
		.bar { background-color: #00ff00; width:0%; height:20px; }
		.percent { position:absolute; display:inline-block; left:50%; color: #040608;}
	</style>

	<!-- Table Style -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
@endsection

@section('modal')
	<div class="modal fade" id="NotulensiDetailModal" tabindex="-1" role="dialog" aria-labelledby="NotulensiDetailModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content pt-1">
				<div class="modal-header">
					<h5 class="modal-title text-dark font-weight-bold" id="NotulensiDetailModalLabel">Detail Notulensi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-dark">
					<table class="table w-100 table-sm table-borderless">
						<tr>
							<td>Nomor Undangan</td>
							<td style="width:1%">:</td>
							<td id="mdata-no-undangan"></td>
						</tr>
						<tr>
							<td>Jenis Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-jenis-rapat"></td>
						</tr>
						<tr>
							<td>Tanggal Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-tgl"></td>
						</tr>
						<tr>
							<td>Waktu Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-waktu"></td>
						</tr>
						<tr>
							<td>Ruang / Total Peserta Rapat</td>
							<td style="width:1%">:</td>
							<td id="">
								<span id="mdata-lokasi"></span> /
								<span id="mdata-total-peserta"></span>	
							</td>
						</tr>
						<tr>
							<td>Pimpinan Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-pemimpin"></td>
						</tr>
						<tr>
							<td>Agenda</td>
							<td style="width:1%">:</td>
							<td id="mdata-agenda"></td>
						</tr>
						<tr>
							<td>Jumlah Agenda</td>
							<td style="width:1%">:</td>
							<td id="mdata-jml-agenda"></td>
						</tr>
						<tr>
							<td>Tamu Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-tamu"></td>
						</tr>
						<tr>
							<td>Notulen Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-notulen"></td>
						</tr>
						<tr>
							<td>Peserta Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-peserta-rapat"></td>
						</tr>
						<tr>
							<td>Detail Rapat</td>
							<td style="width:1%">:</td>
							<td id="mdata-detail-rapat"></td>
						</tr>
						<tr class="pt-2">
							<td>File Notulensi</td>
							<td style="width:1%" class="h-100 pt-2">:</td>
							<td id="mdata-file-notulensi"><a class="btn btn-success h-100" href="{{ route('download.notulensi', ['id' => '1']) }}"><i class="fa-solid fa-arrow-down-to-square"></i> Download File</a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('content')
	{{-- Header Section --}}
   	<div class="section-header bg-white">
        <h1>Daftar Notulensi</h1>
		<div class="section-header-breadcrumb transparent">
			{{-- hanya untuk dipage sekretaris --}}
			@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
				<a href="{{ route('create.notulensi') }}" class="btn btn-primary btn-lg btn-icon-split btn-block">
					<div><i class="fas fa-plus"></i>Tambah Notulensi</div>
				</a>
			@endif
			{{-- untuk dosen dan pegawai tidak ada button ini --}}
		</div>
    </div>
	{{-- End Header Section --}}

	{{-- Content Table Section --}}
	<div class="section-body">
		<div class="card bg-transparent neumorph text-dark" style="font-size: 1em !important;">
			<div class="card-body pb-2">
				<div class="table-responsive">
					<table class="table table-striped w-100" id="table-1">
						<thead>                  
							<tr role="row">
								<th class="text-center" style="width: 25px;">No.</th>
								<th class="">Nomor Undangan</th>
								<th class="">Jenis Rapat</th>
								<th class="">Pimpinan</th>
								<th class="">Tanggal Rapat</th>
								<th class="" style="width: 100px;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $keys => $a)
							<tr role="row" class="odd">
								<td class="sorting_1 align-middle text-center">{{ ++$keys }}</td>
								<td class="align-middle">{{ $a->no_undangan }}</td>
								<td class="align-middle">{{ $a->jenis->nama }}</td>
								<td class="align-middle">{{ $a->pemimpin->nama }}</td>
								<td class="align-middle">{{ $a->tgl->format('d F Y') }}</td>
								
								{{-- Action untuk sekretaris --}}
								@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
								<td class="d-flex justify-content-center">
									<div class="row w-100">
										<div class="col-12 d-flex justify-content-between">
											@if($a->notulen_id == Auth::user()->id)
											<a class="btn btn-primary btn-sm text-white w-50 mr-1" href="{{ route('edit.notulensi', ['id' => $a->id]) }}" title="Edit"><i class="fas fa-edit"></i></a>
											<a class="btn btn-danger btn-sm text-white w-50 ml-1" href="{{ route('delete.notulensi', ['id' => $a->id]) }}" 
												onclick="return confirm('Yakin ingin menghapus data?')" title="Delete"><i class="fas fa-trash"></i></a>
											@else 
											{{-- <span class="badge badge-info">Kamu Tidak punya akses</span> --}}
											@endif
										</div>
										<div class="col-12 d-flex justify-content-center mt-2">
											<a class="btn btn-info w-50 mr-1 btn-sm text-white" title="Detail" data-toggle="modal" data-target="#NotulensiDetailModal"
											data-no-undangan="{{ $a->no_undangan }}"
											data-tgl="{{ $a->tgl->format('d F Y') }}"
											data-lokasi="{{ $a->lokasi }}"
											data-waktu="{{ $a->waktu }}"
											data-pemimpin="{{ $a->pemimpin->nama }}"
											data-jenis="{{ $a->jenis->nama }}"
											data-jml-agenda="{{ $a->jml_agenda }}"
											data-tamu="{{ $a->tamu }}"
											data-detail="{{strip_tags($a->detail_rapat)}}"
											{{-- data-detail="{!! $a->detail_rapat !!}" --}}
											data-file="{{ route('download.notulensi', $a->id) }}"
											data-agenda="{{ $a->agenda }}"
											data-peserta="{{ $a->peserta_rapat }}"
											data-total-peserta="{{ $a->total_peserta }}"
											data-notulen="{{ $a->notulen->name }}">
												<i class="fas fa-circle-info"></i>
											</a>
											<a class="btn btn-success w-50 ml-1 btn-sm text-white" href="{{ route('download.notulensi', $a->id) }}" title="Download"><i class="fas fa-arrow-down-to-square"></i></a>
										</div>
									</div>
								</td>

								{{-- Action untuk Dosen/Pegawai --}}
								@elseif(Auth::user()->role_id == 3)
								<td class="d-flex justify-content-center">
									<div class="row w-100">
										<div class="col-12 d-flex justify-content-between">
											{{-- <a class="btn btn-primary btn-sm text-white w-50 mr-1" title="detail" data-toggle="modal" data-target="#exampleModal{{$a->id}}"><i class="fa-solid fa-circle-info"></i></a> --}}
											<a class="btn btn-primary w-100 btn-sm text-white" title="Detail" data-toggle="modal" data-target="#NotulensiDetailModal"
											data-no-undangan="{{ $a->no_undangan }}"
											data-tgl="{{ $a->tgl->format('d F Y') }}"
											data-lokasi="{{ $a->lokasi }}"
											data-waktu="{{ $a->waktu }}"
											data-pemimpin="{{ $a->pemimpin->nama }}"
											data-jenis="{{ $a->jenis->nama }}"
											data-jml-agenda="{{ $a->jml_agenda }}"
											data-tamu="{{ $a->tamu }}"
											data-detail="{{strip_tags($a->detail_rapat)}}"
											data-file="{{ route('download.notulensi', $a->id) }}"
											data-agenda="{{ $a->agenda }}"
											data-peserta="{{ $a->peserta_rapat }}"
											data-total-peserta="{{ $a->total_peserta }}"
											data-notulen="{{ $a->notulen->name }}">
												&nbsp;<i class="fa-solid fa-circle-info"></i>
											</a>
											<a class="btn btn-info btn-sm text-white w-50 ml-1" href="{{ route('download.notulensi', ['id' => $a->id]) }}"><i class="fa-solid fa-file-arrow-down"></i></a>
										</div>
									</div>
								</td>
								@endif
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	{{-- End Content Table Section --}}
@endsection

@section('script')
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
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#table-1').DataTable();
			$('#NotulensiDetailModal').on('show.bs.modal', function (event) {
				const button = $(event.relatedTarget); // Button that triggered the modal
				
				const no_undangan = button.data('no-undangan'),
				tgl = button.data('tgl'),
				lokasi = button.data('lokasi'),
				waktu = button.data('waktu'),
				pemimpin = button.data('pemimpin'),
				jenis = button.data('jenis'),
				jml_agenda = button.data('jml-agenda'),
				tamu = button.data('tamu'),
				detail = button.data('detail'),
				file = button.data('file'),
				agenda = button.data('agenda'),
				peserta = button.data('peserta'),
				total_peserta = button.data('total-peserta'),
				notulen = button.data('notulen');
				
				var modal = $(this)
				modal.find('#mdata-no-undangan').text(no_undangan);
				modal.find('#mdata-tgl').text(tgl);
				modal.find('#mdata-lokasi').text(lokasi);
				modal.find('#mdata-waktu').text(waktu);
				modal.find('#mdata-pemimpin').text(pemimpin);
				modal.find('#mdata-jenis-rapat').text(jenis);

				modal.find('#mdata-jml-agenda').text(jml_agenda);
				modal.find('#mdata-tamu').text(tamu);
				modal.find('#mdata-tamu').text(tamu);
				modal.find('#mdata-detail-rapat').text(detail);
				modal.find('#mdata-file-notulensi').find('a').attr('href', file);
				modal.find('#mdata-agenda').text(agenda);
				modal.find('#mdata-peserta-rapat').text(peserta);
				modal.find('#mdata-total-peserta').text(total_peserta);
				modal.find('#mdata-notulen').text(notulen);
			});
		});
	</script>
@endsection
