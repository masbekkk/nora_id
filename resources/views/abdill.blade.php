@extends('layouts.nora')

@section('content')

{{-- <div class="main-sidebar"> 
    <!-- sidebar wrapper -->
    <aside id="sidebar-wrapper">
      <!-- sidebar brand -->
      <div class="sidebar-brand">
        <a href="index.html">Noraid</a>
      </div>
      <!-- sidebar menu -->
      <ul class="sidebar-menu">
        <!-- menu header -->
        <li class="menu-header">Menu</li>
        <!-- menu item -->
        <li class="active">
          <a href="index.html"><i class="fas fa-home"></i><span>Dashboard</span></a>
        </li>
        <li class="active">
            <a href="index.html"><i class="fas fa-file"></i><span>Input Notulensi</span></a>
        </li>
        <li class="active">
            <a href="index.html"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
        </li>
      </ul>
    </aside>
</div> --}}

<div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-1.png" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-2.png" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ujang Maman</b> has moved task <b>Fix bug footer</b> to <b>Progress</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <img alt="image" src="../dist/img/avatar/avatar-3.png" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Agung Ardiansyah</b> has moved task <b>Fix bug sidebar</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-4.png" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Ardian Rahardiansyah</b> has moved task <b>Fix bug navbar</b> to <b>Done</b>
                    <div class="time">16 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <img alt="image" src="../dist/img/avatar/avatar-5.png" class="rounded-circle dropdown-item-img">
                  <div class="dropdown-item-desc">
                    <b>Alfa Zulkarnain</b> has moved task <b>Add logo</b> to <b>Done</b>
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../dist/img/avatar/avatar-1.png" width="30" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Nora.id</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="active">
                <a href="index.html"><i class="fas fa-home"></i><span>Dashboard</span></a>
              </li>
              <li class="active">
                  <a href="index.html"><i class="fas fa-file"></i><span>Input Notulensi</span></a>
              </li>
              <li class="active">
                  <a href="index.html"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
              </li>
            
          </ul>
          <div class="p-3 mt-4 mb-4 hide-sidebar-mini">
            <a href="documentation.html" class="btn btn-primary btn-lg btn-icon-split btn-block">
              <i class="far fa-question-circle"></i> <div>Documentation</div>
            </a>
          </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>List Notulensi</h1>
            <div class="section-header-breadcrumb">
                <a href="#" class="btn btn-primary btn-lg btn-icon-split btn-block">
                    <i class="fa-regular fa-file-alt"></i><div>Tambah Notulensi</div>
                </a>
            </div>
          </div>

          <form class="form-inline mr-auto">
            <div class="search-element">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              <br>
            </div>
          </form>

          <br>
          {{-- card --}}  
          <div class="section-body">
            <div class="card">
              {{-- <div class="card-header">
                <h4>Example Card</h4>
              </div> --}}
              
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
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">
                        2
                      </td>
                      <td>Redesign homepage</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="0%" style="height: 4px;">
                          <div class="progress-bar" data-width="0" style="width: 0px;"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Nur Alpiana">
                        <img alt="image" src="assets/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Hariono Yusup">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Bagus Dwi Cahya">
                      </td>
                      <td>2018-04-10</td>
                      <td><div class="badge badge-info">Todo</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr><tr role="row" class="odd">
                      <td class="sorting_1">
                        3
                      </td>
                      <td>Backup database</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="70%" style="height: 4px;">
                          <div class="progress-bar bg-warning" data-width="70%" style="width: 70%;"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Rizal Fakhri">
                        <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Hasan Basri">
                      </td>
                      <td>2018-01-29</td>
                      <td><div class="badge badge-warning">In Progress</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr><tr role="row" class="even">
                      <td class="sorting_1">
                        4
                      </td>
                      <td>Input data</td>
                      <td class="align-middle">
                        <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%" style="height: 4px;">
                          <div class="progress-bar bg-success" data-width="100%" style="width: 100%;"></div>
                        </div>
                      </td>
                      <td>
                        <img alt="image" src="assets/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Rizal Fakhri">
                        <img alt="image" src="assets/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Isnap Kiswandi">
                        <img alt="image" src="assets/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Yudi Nawawi">
                        <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="" data-original-title="Khaerul Anwar">
                      </td>
                      <td>2018-01-16</td>
                      <td><div class="badge badge-success">Completed</div></td>
                      <td><a href="#" class="btn btn-secondary">Detail</a></td>
                    </tr></tbody>
                </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
              </div>

              <div class="card-footer bg-whitesmoke">
                This is card footer
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 Kelompok A2. All rights reserved.
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>
@endsection