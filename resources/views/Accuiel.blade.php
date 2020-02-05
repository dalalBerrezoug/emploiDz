
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
              <li><a href="{{ url('recruteurs') }}">Nos Recruteurs</a></li>
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
   
    @yield('content')
    <body>
  
    <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="bizPage/img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Trouvez votre Futur Emploi en Algerie</h2>
                
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="bizPage/img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Trouvez votre Futur Employés en Algerie</h2>
                
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="bizPage/img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Nous sommes Profetionnel</h2>
               
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="bizPage/img/intro-carousel/4.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tous les Domaines</h2>
                
               
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="bizPage/img/intro-carousel/5.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Tous les Offres</h2>
               
                
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>A propos de nous</h3>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="bizPage/img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Notre Mission</a></h2>
              <p>
                  Participer au développement des entreprises et des individus en permettant aux uns de trouver les talents nécessaires à leur croissance et aux autres de construire leur avenir professionnel
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="bizPage/img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Notre Plan</a></h2>
              <p>
                  Nous existons pour nos utilisateurs, candidats et entreprises, ils sont au cœur de nos stratégies, leurs avis, besoins et aspirations dessinent notre futur et conditionnent notre présent
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="bizPage/img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Notre Vision</a></h2>
              <p>
                  Nous aspirons à jouer un rôle majeur sur le marché de l’emploi en Algérie, à être une entreprise reconnue et aimée pour ce qu’elle est et ce qu’elle fait.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    

    

  

      

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facteurs</h3>
          
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Recruteurs</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Offres</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Condidatures</p>
  				</div>

  			</div>

        <!--<div class="facts-img">
          <img src="img/facts-img.png" alt="" class="img-fluid">
        </div>
      -->
      </div>
    </section><!-- #facts -->

 

              
       

    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
 
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="bizPage/img/clients/client-1.png" alt="">
          <img src="bizPage/img/clients/client-2.png" alt="">
          <img src="bizPage/img/clients/client-3.png" alt="">
          <img src="bizPage/img/clients/client-4.png" alt="">
          <img src="bizPage/img/clients/client-5.png" alt="">
          <img src="bizPage/img/clients/client-6.png" alt="">
          <img src="bizPage/img/clients/client-7.png" alt="">
          <img src="bizPage/img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->

  

   

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contactez-Nous</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Addresse</h3>
              <address>Tlemcen- Algerie</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Numero de Telephone</h3>
              <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">emploi.dz@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Envoyer Le Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>


    </body>