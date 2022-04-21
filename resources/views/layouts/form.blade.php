<!DOCTYPE html>
<html>
<head>
	<title>Nora.ID</title>
	<link rel="icon" href="{{asset('img/pp.jpg')}}" />
	<meta charset="UTF-8">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

	<!-- General CSS Files -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<!-- CSS Libraries Dark Mode -->
	<link rel="stylesheet" href="{{ asset('/css/dark-mode.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/switch.css') }}">
	<!-- Template CSS -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/css/components.css') }}">

    <!-- Page Specific CSS File -->
	@yield('style')
</head>
<body>
<div id="app">
	<div class="main-wrapper">
	<div class="navbar-bg"></div>
	 <nav class="navbar navbar-expand-lg main-navbar">
     <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>

    </form>
    <ul class="navbar-nav navbar-right">

<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <div class="d-sm-none d-lg-inline-block">Hai, oke </div></a>
    <div class="dropdown-menu dropdown-menu-right bg-white">
        <a href="#" class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt">
           </i> Logout

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </a>
    </div>
</li>


</ul>
</nav>

 <div class="main-sidebar bg-white">
    <aside id="sidebar-wrapper bg-white">
        <div class="sidebar-brand bg-white">
            <a href="/"><text>Nora.ID</text></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm bg-white">
            <a href="/"><text>NID</text></a>
        </div>
        <ul class="sidebar-menu bg-white">
            <li><a class="bg-white" href="/user/profile"><i class="fas fa-home" ></i> <span id="hmm">Dashboard</span></a></li>
            <li><a class="bg-white" href="/user/profile"><i class="fas fa-file"></i> <span id="hmm">Input Notulensi</span></a></li>
            <li><a class="bg-white" href="/user/profile"><i class="fas fa-sign-out-alt"></i> <span id="hmm">Logout</span></a></li>
        </ul>

    </aside>
</div>


<div class="main-content">
<section class="section" style="min-height: 531px;">

    {{-- @include('layouts.adminMessage') --}}
    {{-- @include('sweetalert::alert') --}}
    @yield('content')

</div>
@include('layouts.footer')
</section>
{{-- @include('modals.edit') --}}
</body>
<script type="text/javascript">
    $(".alert").alert('close')
</script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('js/stisla.js') }}"></script>
  {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}

  {{-- <script>
    jQuery(function(){
       jQuery('#modal').click();
       jQuery('#modal2').click();
    });
 </script> --}}

  <!-- JS Libraies Dark Mode-->
<script src="{{ asset('/js/dark-mode-switch.min.js') }}"></script>
  <!-- Template JS File -->
  <script src="{{ asset('/js/scripts.js') }}"></script>
  <script src="{{ asset('/js/custom.js') }}"></script>


  <!-- Page Specific JS File -->
  @yield('script')
</html>
