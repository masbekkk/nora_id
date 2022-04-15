<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
	<title>@yield('title', config('app.name'))</title>
	{{-- {{ config('app.name', yield('title')) }} --}}

	@include('layouts.style')
	@yield('style')
</head>
<body>
  	@yield('content')
</body>
@include('layouts.script')
@yield('script')
</html>
