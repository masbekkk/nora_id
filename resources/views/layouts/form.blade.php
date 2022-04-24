<!DOCTYPE html>
<html>
<head>
	<title>Nora.ID</title>
	<link rel="icon" href="{{asset('img/pp.jpg')}}" />
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

			{{-- Page Content --}}
			<div class="main-content">
				<section class="section" style="min-height: 531px;">
					{{-- @include('layouts.adminMessage') --}}
					{{-- @include('sweetalert::alert') --}}
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
