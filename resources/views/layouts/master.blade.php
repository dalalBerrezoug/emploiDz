
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
          <li class="menu-active"><a href="{{ url('accueil') }}">Home</a></li>
          <li class="menu-has-children"><a href="">Offres d'emploi</a>
            <ul>
              <li><a href="{{ url('rechercheavance') }}">Recherche Avancé</a></li>
              <li><a href="{{ url('rechercheparregion') }}">Recherche par Région</a></li>
              <li><a href="{{ url('rechercheparfonction') }}">Recherche par Fonction</a></li>
              <li><a href="{{ url('rechercheparmotcle') }}">Recherche par mot clée</a></li>
              <li><a href="{{ url('recruteurs') }}">Nos Recruteurs</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Conseils</a>
            <ul>
              <li><a href="{{ url('actualite') }}">Actualités</a></li>
              <li><a href="{{ url('modelecv') }}">Modeles de CV</a></li>
              
            </ul>
          </li>
          @if (Route::has('login'))
          <li>
          @auth 
           <!-- <a href="{{ url('/home') }}">Home</a>-->
           <li class="menu-has-children">
           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a><ul>
                              <!--  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
                              
                                    <li>   <a class="dropdown-item" href="{{url('ProfilCondidat')}}"> Mon Profil </a></li>  
                                    <li>   <a class="dropdown-item" href="{{url('MonCv')}}"> Mon CV </a></li>
                              
                              <li>   <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                        {{ __('Déconnexion') }}
                                    </a>
                                   <!-- -->
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"style="display: none;" >
                                        @csrf
                                    </form></li>
                                  <!--******************************************** -->
                                  
                                   
                                    <!-- ******************************-->





                                  </ul></li>
                                <!--</div>-->
                    @else
                       <li> <a href="{{ url('LogTous') }}">Se connecter</a><li>

                        @if (Route::has('register'))
                           <li> <a href="{{ route('register') }}"><button type="button" class="btn btn-outline-success btn-lg mb-2">ESPACE RECRUTEUR</button></a><li>

                          <li>  <button type="button" class="btn btn-success btn-lg mb-2">
                  <a href="{{ route('register') }}">
                 S'INSCRIRE </a>
               </button><li>
                        @endif
                    @endauth<li>
                
            @endif
            

 <!--         
<a href="C:/Users/assia/Desktop/bootstrap/css/Login_v8/connecte.html">Se connecter</a></li>
          <li><button type="button" class="btn btn-outline-success btn-lg mb-2">ESPACE RECRUTEUR</button></li>
          <li>
              <button type="button" class="btn btn-success btn-lg mb-2">
                  <a href="C:/Users/assia/Desktop/bootstrap/css/Login_v8/index.html">
                 S'INSCRIRE </a>
               </button>&nbsp;&nbsp;&nbsp;
          </li> -->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
</header>
@yield('content');


<br><br><br><br><br>


     <!--==========================
    Footer
  ============================-->
  <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-info">
                <h3>Emploi.dz</h3>
                
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Offres d'Emploi</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Conseils</a></li>
                  <li><i class="ion-ios-arrow-right"></i> <a href="#">Se Connecter</a></li>
                  
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contactez nous</h4>
                <p>
                  Tlemcen <br>
                  Algerie<br>
                  
                  <strong>Telephone:</strong> +1 5589 55488 55<br>
                  <strong>Email:</strong> emploi.dz@gmail.com<br>
                </p>
    
                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
    
              </div>
    
              <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Notre Newsletter</h4>
                <form action="" method="post">
                  <input type="email" name="email"><input type="submit"  value="Subscribe">
                </form>
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          
          
        </div>
      </footer><!-- #footer -->


      
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <!-- Uncomment below i you want to use a preloader -->
      <!-- <div id="preloader"></div> -->
    
      <!-- JavaScript Libraries -->
      <script src="{{ asset('bizPage/lib/jquery/jquery.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/jquery/jquery-migrate.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/easing/easing.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/superfish/hoverIntent.js')}}"></script>
      <script src="{{ asset('bizPage/lib/superfish/superfish.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/wow/wow.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/waypoints/waypoints.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/counterup/counterup.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/owlcarousel/owl.carousel.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/isotope/isotope.pkgd.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/lightbox/js/lightbox.min.js')}}"></script>
      <script src="{{ asset('bizPage/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
      <!-- Contact Form JavaScript File -->
      <script src="{{ asset('bizPage/contactform/contactform.js')}}"></script>
    
      <!-- Template Main Javascript File -->
      <script src="{{ asset('bizPage/js/main.js')}}"></script>
      

      @yield('javascripts')

