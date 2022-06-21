<!doctype html>
<html lang="en">
  <head>
  	<title>Login NORA.id</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/Loginstyle.css">

	</head>
	<body class="vh-100" style="background-image: url(image/gedung.jpg); background-repeat: no-repeat; background-size: 100% 100%;">
	<section class="ftco-section">
		@include('sweetalert::alert')
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="d-flex">
		      		<div class="w-100">
                            <center>
		      			        <h3 class="mb-4">Login NORA.ID</h3>
                            </center>
		      		</div>
							{{-- <div class="w-100">
								<p class="social-media d-flex justify-content-end">
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
									<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
								</p>
							</div> --}}
		      	</div>
					<form method="POST" action="{{ route('login') }}" class="login-form">
						@csrf
		      		<div class="form-group">
		      			<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
		      			<input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
		      		</div>
	            <div class="form-group">
	            	<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
	              <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group d-flex align-items-center">
	            	<div class="w-100">
	            		<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" name="remember" >
									  <span class="checkmark"></span>
						</label>
					</div>
					<div class="w-100 d-flex justify-content-end">
		            	
	            	</div>
	            </div>
                <center>
                    <button type="submit" class="btn btn-primary rounded submit">Masuk</button>
					<br><br>
					<a href="/register">Buat akun baru</a>
                </center>
	          </form>
	        </div>
			</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

