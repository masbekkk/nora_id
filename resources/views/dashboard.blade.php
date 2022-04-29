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

@section('content')
	{{-- Header Section --}}
   	<div class="section-header bg-white">
        <h1>Daftar Notulensi</h1>
		<div class="section-header-breadcrumb transparent">
			<a href="documentation.html" class="btn btn-primary btn-lg btn-icon-split btn-block">
				<div><i class="fas fa-plus"></i>Tambah Notulensi</div>
			</a>
		</div>
    </div>
	{{-- End Header Section --}}

	{{-- Content Table Section --}}
	<div class="section-body">
		<form action="/presensi/submit/" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="card card-danger bg-light">
				{{-- <div class="card-header">
					<form class="form-inline mr-auto">
						<div class="search-element">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<button class="btn" type="submit"><i class="fas fa-search"></i></button>
						</div>
					</form>
					<div class="ml-auto w-0">
						<label class="switch">
							<input type="checkbox" class="primary" id="darkSwitch">
							<span class="slider round" data-checked="fas fa-moon"></span>
						</label>
					</div>
				</div> --}}
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
								<tr role="row" class="odd">
									<td class="sorting_1 align-middle text-center">1</	td>
									<td class="align-middle">6970/PL14/TU/2021</td>
									<td class="align-middle">Rapat Perubahan Kurikulum</td>
									<td class="align-middle">Ali Ridho Barakbah, S. Kom., Ph.D.</td>
									<td class="align-middle">Senin, 30 November 2021</td>
									<td class="d-flex justify-content-center">
										<div class="row w-100">
											<div class="col-12 d-flex justify-content-between">
												<a class="btn btn-primary btn-sm text-white w-50 mr-1" title="Edit"><i class="fas fa-edit"></i></a>
												<a class="btn btn-danger btn-sm text-white w-50 ml-1" title="Delete"><i class="fas fa-trash"></i></a>
											</div>
											<div class="col-12 d-flex justify-content-center mt-2">
												<a class="btn btn-info w-100 btn-sm text-white" title="Detail" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-"></i>&nbsp;Detail</a>
											</div>
										</div>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td class="sorting_1">2</td>
									<td>6970/PL14/TU/2021</td>
									<td class="align-middle">Rapat Perubahan Kurikulum</td>
									<td>Ali Ridho Barakbah, S. Kom., Ph.D.</td>
									<td>Senin, 30 November 2021</td>
									<td>
										<i class="fa-solid fa-edit"></i>
										<i class="fa-solid fa-delete"></i>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td class="sorting_1">3</td>
									<td>6970/PL14/TU/2021</td>
									<td class="align-middle">Rapat Perubahan Kurikulum</td>
									<td>Ali Ridho Barakbah, S. Kom., Ph.D.</td>
									<td>Senin, 30 November 2021</td>
									<td>
										<i class="fa-solid fa-edit"></i>
										<i class="fa-solid fa-delete"></i>
									</td>
								</tr>
								<tr role="row" class="odd">
									<td class="sorting_1">4</td>
									<td>6970/PL14/TU/2021</td>
									<td class="align-middle">Rapat Perubahan Kurikulum</td>
									<td>Ali Ridho Barakbah, S. Kom., Ph.D.</td>
									<td>Senin, 30 November 2021</td>
									<td>
										<i class="fa-solid fa-edit"></i>
										<i class="fa-solid fa-delete"></i>
									</td>
								</tr>
								{{-- <tr role="row" class="even">
								</tr> --}}
							</tbody>
						</table>
						{{-- <div class="row">
							<div class="col-sm-12 col-md-5">
								<div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
							</div>
							<div class="col-sm-12 col-md-7">
								<div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
									<ul class="pagination">
										<li class="paginate_button page-item previous disabled" id="table-1_previous">
											<a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
										</li>
										<li class="paginate_button page-item active">
											<a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a>
										</li>
										<li class="paginate_button page-item next disabled" id="table-1_next">
											<a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div> --}}
					</div>
				</div>
				<br>
			</div>
		</form>
	</div>
	{{-- End Content Table Section --}}
@endsection

@section('script')

	<!-- Modal Detail Notulensi -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

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
		})
	</script>
@endsection
