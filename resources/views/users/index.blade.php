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
	  

@endsection

@section('content')
	{{-- Header Section --}}
   	<div class="section-header bg-white">
        <h1>Daftar Pengguna</h1>
		<div class="section-header-breadcrumb transparent">
			{{-- hanya untuk dipage sekretaris --}}
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
								<th class="">Nama Pengguna</th>
								<th class="">Email</th>
								<th class="">Role</th>
								
								<th class="" style="width: 100px;">Aksi</th>
								<th class="">Change Role</th>
							</tr>
						</thead>
						<tbody>
							@foreach($data as $a)
							<tr role="row" class="odd">
								<td class="sorting_1 align-middle text-center">{{ $loop->iteration }}</td>
								<td class="align-middle">{{ $a->name }}</td>
								<td class="align-middle">{{ $a->email }}</td>
								<td class="align-middle">{{ $a->role->nama }}</td>

								{{-- Action untuk sekretaris --}}
								@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
								<td class="d-flex justify-content-center">
									<div class="row w-100">
										<div class="col-12 d-flex justify-content-between">
											<a class="btn btn-primary btn-sm text-white w-50 mr-1" data-toggle="modal" data-target="#jenisrapat{{$a->id}}" title="Edit"><i class="fas fa-edit"></i></a>
											<a class="btn btn-danger btn-sm text-white w-50 ml-1" href="{{route('delete.users', ['id' => $a->id])}}" onclick="return confirm('Yakin ingin menghapus data?')" title="Delete"><i class="fas fa-trash"></i></a>
										</div>
										
									</div>
								</td>
								<td>
								<div class="dropdown d-inline">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Role User
                                    </button>
                                    <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        {{-- <a class="dropdown-item has-icon" href="#"><i class="far fa-heart"></i> Original</a>
                                        <a class="dropdown-item has-icon" href="#"><i class="far fa-file"></i> Non Original</a> --}}
                                        <a href='/admin/change-role-user/{{$a->id}}/1' class="dropdown-item has-icon"
                                            onclick="return confirm('Yakin ingin mengubah role {{$a->name}} menjadi Admin?')"><i class="fas fa-user-cog"></i> As Admin</a>

                                        <a href='/admin/change-role-user/{{$a->id}}/2' class="dropdown-item has-icon"
                                            onclick="return confirm('Yakin ingin mengubah role {{$a->name}} menjadi Sekretaris?')"><i class="fas fa-user-shield"></i> As Sekretaris</a>

                                        <a href='/admin/change-role-user/{{$a->id}}/3' class="dropdown-item has-icon"
                                            onclick="return confirm('Yakin ingin mengubah role {{$a->name}} menjadi Pegawai/Dosen?')"><i class="fas fa-paperclip"></i> As Pegawai/Dosen</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Data Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <div class="form-group">
                <label>Nama Pengguna</label>
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
