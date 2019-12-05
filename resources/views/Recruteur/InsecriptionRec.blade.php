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
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Conseils</a>
          <ul>
              <li><a href="{{ url('actualite') }}">Actualités</a></li>
              <li><a href="{{ url('modelecv') }}">Modeles de CV</a></li>
              
            </ul>
          </li>
          <li><a href="{{route('login')}}">Se connecter</a></li>
          <li><a href="{{url('InsecriptionRec')}}"><button type="button" class="btn btn-outline-success btn-lg mb-2">ESPACE RECRUTEUR</button></li>
          <!--<li>
              <button type="button" class="btn btn-success btn-lg mb-2">
                  <a href="C:/Users/assia/Desktop/bootstrap/css/Login_v8/index.html">
                 S'INSCRIRE </a>
               </button>&nbsp;&nbsp;&nbsp;
          </li>-->
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>


   
   
  </header>
  
<div class="container" style="margin-top: 100px;">
	<div class="row"> 
    <div class="col-lg-3" style="margin-top: 100px;">
      <form class="form-container">
          <div class="form-group">
            
          </div>
          <div class="form-group">
            
          </div>
          <div class="form-group ">
         
          </div>
         
        </form> 
      </div>

  
        <div align="right" class="col-lg-9">
          
        	<br><br>
        	<div class="col-lg-4 main-section" style="background-color: #00000" align="left">
  <form method="post" action="">
  <div class="form-group">
  
  <input type="text" class="form-control" name="name" placeholder="Nom d'utilisateur">
</div> 
<!--<div class="form-group">
  
  <input type="text" class="form-control" name="prenom" placeholder="Prenom">
</div> -->

<div class="form-group">
  
  <input type="email" class="form-control" name="email" placeholder="Email">
</div> 
<div class="form-group">
  
  <input type="password" class="form-control" name="password" placeholder="Mot Passe">
</div>
<div class="form-group">
  
  <input type="password" class="form-control" name="passeword" placeholder="Confermier Mot Passe">
</div>
<div class="form-group" align="center">
  <button type="button" class="btn btn-success btn-lg mb-2">S'inscrire</button>
  <!--<a href="{{url('Recruteur')}}"> </a>-->
  </div>   
  </form>
        

      
   <form action="{{url('login')}}">
   <div class="col-sm-12">
              <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
            </div> 	</form>		
        		</div>
            </div>
    </div>
    </div>
      
</body>
</html>