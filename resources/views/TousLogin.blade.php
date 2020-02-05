@extends('layouts.master')

@section('content')
<br><br><br><br>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="connecte/image/png" href="connecte/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('connecte/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
                    {{ __('Login') }}
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                @csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{ __('E-Mail Address') }}</span>
                        <input class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter votre email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<!-- <span class="focus-input100"></span>-->
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">{{ __('Password') }}</span>
                        <input class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter password" id="password" required autocomplete="current-password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<!--<span class="focus-input100"></span>-->
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
                            <input class="input-checkbox100 form-check-input" id="remember" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>

							<label class="label-checkbox100 form-check-label" for="remember">
                            {{ __('Remember Me') }}
							</label>
						</div>

						<div>
							
                            
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link txt1" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
                        {{ __('Login') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	


<!--===============================================================================================-->
<script src="{{ asset('connecte/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connecte/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connecte/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ asset('connecte/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connecte/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connecte/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ asset('connecte/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connecte/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('connecte/js/main.js')}}"></script>

</body>
</html>
@endsection
