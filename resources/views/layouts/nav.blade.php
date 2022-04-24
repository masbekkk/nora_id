<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
	<form class="form-inline mr-auto">
		<ul class="navbar-nav mr-3">
			<li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
		</ul>
	</form>
	<ul class="navbar-nav navbar-right">
		<li class="dropdown">
			<a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
				<div class="d-sm-none d-lg-inline-block">Hai, denas</div>
			</a>
			<div class="dropdown-menu dropdown-menu-right bg-white">
				<a href="#" class="dropdown-item has-icon text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="fas fa-sign-out-alt"></i> Logout
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
					</form>
				</a>
			</div>
		</li>
	</ul>
</nav>