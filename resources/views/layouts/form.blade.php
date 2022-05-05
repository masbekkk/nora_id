<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name') ?? 'Nora.ID' }}</title>
	<link rel="icon" href="{{ asset('img/nora-small-sidebar-header.png') }}" />
	<meta charset="UTF-8">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

	@include('layouts.style')

    <!-- Page Specific CSS File -->
	@yield('style')
</head>
<body>
	<div id="app">
		
		<div class="main-wrapper">
			@include('layouts.nav')
			@include('layouts.sidebar')
			@include('sweetalert::alert')
			
			{{-- Page Content --}}
			<div class="main-content">
				<section class="section" style="min-height: 531px;">
					{{-- @include('layouts.adminMessage') --}}
					
					@yield('content')
				</section>
			</div>
			{{-- End Page Content --}}
			
			@include('layouts.footer')
			{{-- @include('modals.edit') --}}
		</div>
		
	</div>
	
</body>

@include('layouts.script')

<!-- Page Specific JS File -->
@yield('script')
</html>
