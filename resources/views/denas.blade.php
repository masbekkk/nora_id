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
        <h1><text>List Notulensi</text></h1>
		<div class="section-header-breadcrumb transparent">
      <a href="documentation.html" class="btn btn-primary btn-lg btn-icon-split btn-block">
        <div>Tambah Notulensi</div>
      </a>
		</div>
    </div>
	<form action="/presensi/submit/" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="card card-danger bg-light">
				<div class="card-header">
					{{-- <h1>Presensi</h1> --}}
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
				</div>
                <div class="card-body pb-0">
                    {{-- @if($sudah == 1) --}}
                    <div class="table-responsive">
                      <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12"><table class="table table-striped dataTable no-footer" id="table-1" role="grid" aria-describedby="table-1_info">
                        <thead>                                 
                          <tr role="row">
                            <th class="text-center sorting_asc" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                              #
                            : activate to sort column descending" style="width: 18.6771px;">
                              No.
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Task Name: activate to sort column ascending" style="width: 132.542px;">
                              Nomor Undangan
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Progress" style="width: 132.542px;">
                              Agenda
                            </th>
                            <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Members" style="width: 200px;">
                              Pimpinan
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Due Date: activate to sort column ascending" style="width: 150px;">
                              Hari, Tanggal
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 63.1875px;">
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>                                 
                          
                          
                          
                          
                        <tr role="row" class="odd">
                            <td class="sorting_1">
                              1
                            </td>
                            <td>6970/PL14/TU/2021</td>
                            <td class="align-middle">
                              Rapat Perubahan Kurikulum
                            </td>
                            <td>
                              Ali Ridho Barakbah, S. Kom., Ph.D.
                            </td>
                            <td>Senin, 30 November 2021</td>
                            <td>
                              <i class="fa-solid fa-edit"></i>
                              <i class="fa-solid fa-delete"></i>
                            </td>
                        </tr>
                        <tr role="row" class="odd">
                          <td class="sorting_1">
                            2
                          </td>
                          <td>6970/PL14/TU/2021</td>
                          <td class="align-middle">
                            Rapat Perubahan Kurikulum
                          </td>
                          <td>
                            Ali Ridho Barakbah, S. Kom., Ph.D.
                          </td>
                          <td>Senin, 30 November 2021</td>
                          <td>
                            <i class="fa-solid fa-edit"></i>
                            <i class="fa-solid fa-delete"></i>
                          </td>
                      </tr>
                      <tr role="row" class="odd">
                        <td class="sorting_1">
                          3
                        </td>
                        <td>6970/PL14/TU/2021</td>
                        <td class="align-middle">
                          Rapat Perubahan Kurikulum
                        </td>
                        <td>
                          Ali Ridho Barakbah, S. Kom., Ph.D.
                        </td>
                        <td>Senin, 30 November 2021</td>
                        <td>
                          <i class="fa-solid fa-edit"></i>
                          <i class="fa-solid fa-delete"></i>
                        </td>
                    </tr>
                    <tr role="row" class="odd">
                      <td class="sorting_1">
                        4
                      </td>
                      <td>6970/PL14/TU/2021</td>
                      <td class="align-middle">
                        Rapat Perubahan Kurikulum
                      </td>
                      <td>
                        Ali Ridho Barakbah, S. Kom., Ph.D.
                      </td>
                      <td>Senin, 30 November 2021</td>
                      <td>
                        <i class="fa-solid fa-edit"></i>
                        <i class="fa-solid fa-delete"></i>
                      </td>
                  </tr>
      
                          <tr role="row" class="even">
                            
                          </tr></tbody>
                      </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                    </div>
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
