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
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<table>
						<tr>
							<td>Nomor Undangan</td>
							<td>: </td>
							<td id="mdata-no-undangan"></td>
						</tr>
						<tr>
							<td>Agenda</td>
							<td>: </td>
							<td id="mdata-agenda"></td>
						</tr>
						<tr>
							<td>Pimpinan Rapat</td>
							<td>: </td>
							<td id="mdata-pemimpin"></td>
						</tr>
						<tr>
							<td>Tanggal Rapat</td>
							<td>: </td>
							<td id="mdata-tgl"></td>
						</tr>
						<tr>
							<td>Waktu Rapat</td>
							<td>: </td>
							<td id="mdata-waktu"></td>
						</tr>
						<tr>
							<td>Ruang/Lokasi</td>
							<td>: </td>
							<td id="mdata-lokasi"></td>
						</tr>
						<tr>
							<td>Jenis Rapat</td>
							<td>: </td>
							<td id="mdata-jenis-rapat"></td>
						</tr>
						<tr>
							<td>Notulen Rapat</td>
							<td>: </td>
							<td id="mdata-notulen">Shinta</td>
						</tr>
						<tr>
							<td>Peserta Rapat</td>
							<td>: </td>
							<td id="mdata-peserta-rapat"></td>
						</tr>
						<tr>
							<td>Total Peserta Rapat</td>
							<td>: </td>
							<td id="mdata-total-peserta"></td>
						</tr>
						<tr>
							<td>Detail Rapat</td>
							<td>: </td>
							<td id="mdata-detail-rapat"></td>
						</tr>
						<tr>
							<td>File Dokumentasi</td>
							<td>: </td>
							<td id="mdata-file-notulensi"><a href="{{ route('download.notulensi', ['id' => '1']) }}">Download File</a></td>
						</tr>
					</table>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
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
			@if(Auth::user()->role_id == 2)
				<a href="{{route('create.notulensi')}}" class="btn btn-primary btn-lg btn-icon-split btn-block">
					<div><i class="fas fa-plus"></i>Tambah Notulensi</div>
				</a>
			@endif
			{{-- untuk dosen dan pegawai tidak ada button ini --}}
		</div>
    </div>
	{{-- End Header Section --}}

	{{-- Content Table Section --}}
	<div class="section-body">
		<div class="card card-danger bg-light">
			<div class="card-body pb-2">
				<div class="table-responsive">
					<table class="table table-striped w-100" id="table-1">
						<thead>                  
							<tr role="row">
								<th class="text-center" style="width: 25px;">No.</th>
								<th class="">Nomor Undangan</th>
								<th class="">Agenda</th>
								<th class="">Pimpinan</th>
								<th class="">Hari, Tanggal</th>
								<th class="" style="width: 100px;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $keys => $a)
							<tr role="row" class="odd">
								<td class="sorting_1 align-middle text-center">{{ ++$keys }}</td>
								<td class="align-middle">{{ $a->no_undangan }}</td>
								<td class="align-middle">{{ $a->agenda }}</td>
								<td class="align-middle">{{ $a->pemimpin->name }}</td>
								<td class="align-middle">{{ date('d M Y', strtotime($a->tgl)) }}</td>
								
								{{-- Action untuk sekretaris --}}
								@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
								<td class="d-flex justify-content-center">
									<div class="row w-100">
										<div class="col-12 d-flex justify-content-between">
											<a class="btn btn-primary btn-sm text-white w-50 mr-1" title="Edit"><i class="fas fa-edit"></i></a>
											<a class="btn btn-danger btn-sm text-white w-50 ml-1" title="Delete"><i class="fas fa-trash"></i></a>
										</div>
										<div class="col-12 d-flex justify-content-center mt-2">
											<a class="btn btn-info w-100 btn-sm text-white" title="Detail" data-toggle="modal" data-target="#exampleModal" data-whatever="{{ $a->id }}"><i class="fas fa-"></i><i class="fa-solid fa-circle-info"></i>&nbsp;Detail</a>
										</div>
									</div>
								</td>

								{{-- Action untuk Dosen/Pegawai --}}
								@elseif(Auth::user()->role_id == 3)
								<td class="d-flex justify-content-center">
									<div class="row w-100">
										<div class="col-12 d-flex justify-content-between">
											<a class="btn btn-primary btn-sm text-white w-50 mr-1" title="detail" data-toggle="modal" data-target="#exampleModal{{$a->id}}"><i class="fa-solid fa-circle-info"></i></a>
											<a class="btn btn-info btn-sm text-white w-50 ml-1" href="{{ route('download.notulensi', ['id' => $a->id]) }}"><i class="fa-solid fa-file-arrow-down"></i></a>
										</div>
									</div>
								</td>
								@endif
							</tr>
							{{-- <!-- Modal Detail Notulensi -->
							<div class="modal fade" id="exampleModal{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<table>
												<tr>
													<td>Nomor Undangan</td>
													<td>: </td>
													<td>{{$a->no_undangan}}</td>
												</tr>
												<tr>
													<td>Agenda</td>
													<td>: </td>
													<td>{{$a->agenda}}</td>
												</tr>
												<tr>
													<td>Pimpinan Rapat</td>
													<td>: </td>
													<td>{{$a->pemimpin->name}}</td>
												</tr>
												<tr>
													<td>Tanggal Rapat</td>
													<td>: </td>
													<td>{{date('d M Y', strtotime($a->tgl))}}</td>
												</tr>
												<tr>
													<td>Waktu Rapat</td>
													<td>: </td>
													<td>{{$a->waktu}}</td>
												</tr>
												<tr>
													<td>Ruang/Lokasi</td>
													<td>: </td>
													<td>{{$a->lokasi}}</td>
												</tr>
												<tr>
													<td>Jenis Rapat</td>
													<td>: </td>
													<td>{{$a->jenis->nama}}</td>
												</tr>
												<tr>
													<td>Notulen Rapat</td>
													<td>: </td>
													<td>Shinta</td>
												</tr>
												<tr>
													<td>Peserta Rapat</td>
													<td>: </td>
													<td>...</td>
												</tr>
												<tr>
													<td>Total Peserta Rapat</td>
													<td>: </td>
													<td>{{$a->total_peserta}}</td>
												</tr>
												<tr>
													<td>Detail Rapat</td>
													<td>: </td>
													<td>{{$a->detail_rapat}}</td>
												</tr>
												<tr>
													<td>File Dokumentasi</td>
													<td>: </td>
													<td><a href="{{route('download.notulensi', ['id' => $a->id])}}">Download File</a></td>
												</tr>
											</table>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
											<button type="button" class="btn btn-primary">Lanjut</button>
										</div>
									</div>
								</div>
							</div> --}}
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
			$('#exampleModal').on('show.bs.modal', function (event) {
				var button = $(event.relatedTarget); // Button that triggered the modal
				var recipient = button.data('whatever'); // Extract info from data-* attributes
				
				// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
				// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
				var modal = $(this);
				modal.find('#tr-1').text('test');
				modal.find('#tr-2').text('test');
				modal.find('#tr-3').text('test');
				modal.find('#tr-4').text('test');
				modal.find('#tr-5').text('test');
				modal.find('#tr-6').text('test');
				modal.find('#tr-7').text('test');
				modal.find('#tr-9').text('test');
				modal.find('#tr-10').text('test');
				modal.find('#tr-11').text('test');
				modal.find('#tr-12').text('test');
				// modal.find('.modal-body input').val(recipient);
			});
		});
	</script>
@endsection
