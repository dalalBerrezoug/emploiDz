<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Espace Recruteur</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('BizPage/img/favicon.png')}}" rel="icon">
 <!-- <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('BizPage/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('BizPage/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{asset('BizPage/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('BizPage/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('BizPage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('BizPage/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('BizPage/css/style.css')}}" rel="stylesheet">

</head>
<body style="background-image: url(recruter.jpg);">
<header id="header" style="background-color: black;">
   

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Emploi.dz</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container" style="background-color: black;">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ url('Accuiel') }}">Home</a></li>
          <li class="menu-has-children"><a href="">Offres d'emploi</a>
            <ul>
              <li><a href="{{ url('rechercheavance') }}">Recherche Avancé</a></li>
              <li><a href="{{ url('rechercheparregion') }}">Recherche par Région</a></li>
              <li><a href="{{ url('rechercheparfonction') }}">Recherche par Fonction</a></li>
              <li><a href="{{ url('rechercheparmotcle') }}">Recherche par mot clée</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Conseils</a>
            <ul>
              <li><a href="{{ url('actualite') }}">Actualités</a></li>
              <li><a href="{{ url('modelecv') }}">Modeles de CV</a></li>
              
            </ul>
          </li>
          <li><a href="{{url('LogTous')}}">Se connecter</a></li>
          <li><a href="{{url('InsecriptionRec')}}"><button type="button" class="btn btn-outline-success btn-lg mb-2">ESPACE RECRUTEUR</button></li>
          <li>
              <button type="button" class="btn btn-success btn-lg mb-2">
                  <a href="{{url('register')}}">
                 S'INSCRIRE </a>
               </button>&nbsp;&nbsp;&nbsp;
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
   
    </header>

  <br><br><br><br><br><br>
  <div align="right" class="col-lg-9">
            <div class="col-md-8 main-section" style="background-color: #00000" align="right">
            <br><br><br><br>
                    <form method="POST" action="{{route('register')}}">
                        @csrf

                        <div class="form-group">

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom d'utilisateur" >

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="col-md-6">
                                <input id="password"  placeholder="Mot Passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <!--<label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>-->

                            <div class="col-md-6">
                                <input id="password-confirm" placeholder="Confermier Mot Passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group" align="right">
                            <div class="col-md-6" align="center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S inscrire') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

