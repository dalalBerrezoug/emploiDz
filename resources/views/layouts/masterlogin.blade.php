
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EmploiDz</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="{{ asset('bizPage/lib/bootstrap/css/bootstrap.min.css')}}">

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="{{ asset('bizPage/lib/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('bizPage/lib/animate/animate.min.css')}}">
 <link rel="stylesheet" href="{{ asset('bizPage/lib/ionicons/css/ionicons.min.css')}}">
   <link rel="stylesheet" href="{{ asset('bizPage/lib/owlcarousel/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{ asset('bizPage/lib/lightbox/css/lightbox.min.css')}}">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{ asset('bizPage/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('bizPage/css/stylecv.css')}}">
  <link href="{{ asset('BizPage/open-iconic-master/font/css/open-iconic-bootstrap.css')}}" rel="stylesheet">


  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body style="background-color:ghostwhite">


  <!--==========================
    Header
  ============================-->
  <header id="header" style="background-color: black;">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Emploi.dz</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container" style="background-color: black;">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ route('home') }}">Home</a></li>
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
    </div>
    </header>
    <body>
    @yield('content')

    </body>
    </html>