<div class="main-sidebar">
	<aside id="sidebar-wrapper">
		<div class="sidebar-brand my-3">
			<a href="/"><img src="{{ asset('img/noraid-logo.png') }}" alt="Nora.ID" class="sidebar-title"></a>
		</div>
		<div class="sidebar-brand sidebar-brand-sm">
			<a href="/"><img src="{{ asset('img/noraid-logo-sm.png') }}" alt="NID" class="sidebar-title"></a>
		</div>
		<ul class="sidebar-menu">
			<li class="menu-header">Menu Utama</li>
			<li class="{{ Route::is('dashboard.notulensi') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard.notulensi') }}"><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
			@if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
				<li class="{{ Route::is('create.notulensi') ? 'active' : '' }}"><a class="nav-link" href="{{ route('create.notulensi') }}"><i class="fas fa-file-arrow-up"></i> <span>Input Notulensi</span></a></li>
			@endif
			@if(Auth::user()->role_id == 1)
				<li class="{{ Route::is('users') ? 'active' : '' }}"><a class="nav-link" href="{{ route('users') }}"><i class="fas fa-users"></i> <span>Data Pengguna</span></a></li>
				<li class="{{ Route::is('lokasi.rapat') ? 'active' : '' }}"><a class="nav-link" href="{{ route('lokasi.rapat') }}"><i class="fas fa-location-pin"></i> <span>Data Lokasi Rapat</span></a></li>
				<li class="{{ Route::is('jenis.rapat') ? 'active' : '' }}"><a class="nav-link" href="{{ route('jenis.rapat') }}"><i class="fas fa-tablet"></i> <span>Data Jenis Rapat</span></a></li>
			@endif
			{{-- <li><a class="nav-link" href="#"><i class="fas fa-file-arrow-down"></i> <span>Export</span></a></li> --}}
		</ul>
	</aside>
</div>