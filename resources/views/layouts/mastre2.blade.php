<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Empoli.dz</title>
    <!-- Bootstrap Core CSS -->
    <link type="text/css" href="{{asset('pixel/pixel-html/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link type="text/css" href="{{asset('pixel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link  type="text/css" href="{{asset('pixel/pixel-html/css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('BizPage/css/stylecv.css')}}">
    <link rel="stylesheet" href="{{asset('BizPage/css/style.css')}}">
    <!-- Custom CSS -->
    <link  type="text/css" href="{{asset('pixel/pixel-html/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link type="text/css" href="{{asset('pixel/pixel-html/css/colors/blue-dark.css')}}" id="theme" rel="stylesheet">
    <link href="{{asset('pixel/open-iconic-master/font/css/open-iconic-bootstrap.css')}}" rel="stylesheet">

</head>

<body>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="{{url('Accuiel')}}"><b>Emploi.dz</b></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Chercher..." class="form-control"> <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="{{asset('pixel/plugins/images/users/recru.jpeg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ __('Login') }}</b> </a>
                    </li>
                </ul>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="overlay" id="overlay">
                      <div class="popup" id="popup">
                        <h2>Éditer Votre informations personnelles 
                        
                        <span id="close" class="close"><a href="{{url('Profile')}}"> &times; </a></span></h2><hr>
                       
                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label"><b>Civilité:</b></label>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" value="Monsieur"> Monsieur
                                </label>
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" value="Madame"> Madame
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio3" value="Mademoiselle"> Mademoiselle
                                  </label>
                                
                              </div>
                              
                              </div>


                              <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Nom:</label>
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" name="name">
                          <label for="example-text-input" class="col-2 col-form-label">Prenom:</label>
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" name="name">
                          <label for="example-text-input" class="col-2 col-form-label">Email:</label>
                         
                            <input class="form-control" type="email" value="Artisanal kale" id="example-text-input" name="name">
                            <label for="example-text-input" class="col-2 col-form-label">Numéro de telephone:</label>
                         
                         <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" name="name">
                         <label for="example-text-input" class="col-2 col-form-label">Votre Entreprise:</label>
                         <div class="col-12">
                         <div class="col-6">
                         <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" name="name">
                         </div>
                         <div class="col-6">
                         <button class="btn btn-success"><a href="">Mettre à jour le profil</a></button>
                         </div>
                        </div>
                        </div>
    
                        
                         <div class="form-group">
                                    
                                </div>
                      </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="{{asset('pixel/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('pixel/pixel-html/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('pixel/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('pixel/pixel-html/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('pixel/pixel-html/js/waves.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('pixel/pixel-html/js/custom.min.js')}}"></script>
</body>

</html>
