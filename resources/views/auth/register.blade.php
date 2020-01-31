@extends('layouts.master')


@section('content')
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
<br><br><br><br>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" >
				<div class="login100-form-title" style="background-image: url(connecte/images/bg-01.jpg);">
					<span class="login100-form-title-1">
						S'inscrire
					</span>
				</div>
                <br><br><br><br>
				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                @csrf

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">{{ __('Name') }}</span>
                        <input class="input100 form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Enter votre nom" value="{{ old('name') }}" id="name" required autocomplete="name" autofocus>
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
							<span class="label-input100">{{ __('E-Mail Address') }}</span>
                            <input id="email" class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Enter votre e-mail" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
								<span class="label-input100">Mot de passe</span>
                                <input id="password" class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Enter votre mot de pase" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
								<span class="focus-input100"></span>
							</div>

							<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
									<span class="label-input100">Confirmer mot de passe</span>
                                    <input id="password-confirm" class="input100 form-control" type="password" name="password_confirmation" placeholder="Confirmer votre mot de pase" required autocomplete="new-password">

									<span class="focus-input100"></span>
								</div>

				<br><br><br>

					<div class="container-login100-form-btn"><br><br><br>
						<button class="login100-form-btn">
                        {{ __('Inscrire') }}
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
