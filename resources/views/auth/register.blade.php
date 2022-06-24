<!doctype html>
<html lang="en">
<head>
  	<title>Register NoraID</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="{{ asset('img/noraid-logo-sm.png') }}" />
	
	<link rel="stylesheet" href="css/Loginstyle.css">

</head>
<body class="vh-100" style="background-image: url(image/gedung.jpg); background-repeat: no-repeat; background-size: 100% 100%;">
    <section class="ftco-section">
        
        <div class="container">
            @include('sweetalert::alert')
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        {{-- <div class="card-header">{{ __('Register') }}</div> --}}
                        <div class="w-100">
                            <center>
                                <h3 class="mb-4">Register NoraID</h3>
                            </center>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                                <input id="name" type="text" class="form-control rounded-left" placeholder="Name" name="name" required>

                                @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-envelope"></span></div>
                                <input id="email" type="email" class="form-control rounded-left" placeholder="Email" name="email" required>

                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                                <input id="password" type="password" class="form-control rounded-left" placeholder="Password" name="password" required>

                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-unlock"></span></div>
                                <input id="password-confirm" type="password" class="form-control rounded-left" placeholder="Confirm Password" name="password_confirmation" required>

                            </div>

                            {{-- <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div> --}}

                            <center>
                                <div class="row mb-0">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                    <br><br>
                                </div>
                                <a href="/login">Masuk disini</a>
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

