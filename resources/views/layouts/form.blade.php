<!DOCTYPE html>
<html>
<head>
	<title>{{ config('app.name') ?? 'Nora.ID' }}</title>
	<link rel="icon" href="{{ asset('img/noraid-logo-sm.png') }}" />
	<meta charset="UTF-8">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

	@include('layouts.style')

    <!-- Page Specific CSS File -->
	@yield('style')
</head>
<body>
	@yield('modal')
	<div id="app">
		<div class="main-wrapper">
			@include('layouts.nav')
			@include('layouts.sidebar')
			{{-- @include('sweetalert::alert') --}}
			
			{{-- Page Content --}}
			<div class="main-content">
				<section class="section" style="min-height: 531px;">
					@include('sweetalert::alert')
					@yield('content')
				</section>
			</div>
			{{-- End Page Content --}}
			
			@include('layouts.footer')
		</div>
		
	</div>
	
</body>

@include('layouts.script')

<!-- Page Specific JS File -->
@yield('script')
</html>
