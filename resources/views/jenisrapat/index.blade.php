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
	    <!-- Modal -->
<div class="modal fade" id="jenisrapat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <form action="{{route('store.jenis.rapat')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jenis Rapat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label>Nama Jenis Rapat</label>
                <input class="form-control" type="text" name="nama">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </div>
    </form>
    </div>
  </div>

@endsection

@section('content')
	{{-- Header Section --}}
   	<div class="section-header bg-white">
        <h1>Daftar Jenis Rapat</h1>
		<div class="section-header-breadcrumb transparent">
			{{-- hanya untuk dipage sekretaris --}}
			@if(Auth::user()->role_id == 1)
				<a href="#" class="btn btn-primary btn-lg btn-icon-split btn-block" data-toggle="modal" data-target="#jenisrapat">
					<div><i class="fas fa-plus"></i>Tambah Data</div>
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
								<th class="">Nama Jenis Rapat</th>
								
								<th class="" style="width: 100px;">Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $a)
							<tr role="row" class="odd">
								<td class="sorting_1 align-middle text-center">{{ $loop->iteration }}</td>
								<td class="align-middle">{{ $a->nama }}</td>

								{{-- Action untuk sekretaris --}}
								@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
								<td class="d-flex justify-content-center">
									<div class="row w-100">
										<div class="col-12 d-flex justify-content-between">
											<a class="btn btn-primary btn-sm text-white w-50 mr-1" data-toggle="modal" data-target="#jenisrapat{{$a->id}}" title="Edit"><i class="fas fa-edit"></i></a>
											<a class="btn btn-danger btn-sm text-white w-50 ml-1" href="{{route('delete.jenis.rapat', ['id' => $a->id])}}" onclick="return confirm('Yakin ingin menghapus data?')" title="Delete"><i class="fas fa-trash"></i></a>
										</div>
										
									</div>
								</td>
                                
								@endif
							</tr>
                             <!-- Modal -->
<div class="modal fade" id="jenisrapat{{$a->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog">
    <form action="{{route('update.jenis.rapat', ['id' => $a->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Jenis Rapat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label>Nama Jenis Rapat</label>
                <input class="form-control" type="text" name="nama" value="{{$a->nama}}">
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
      </div>
    </form>
    </div>
  </div>
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

	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#table-1').DataTable();
			
		});
	</script>
@endsection
