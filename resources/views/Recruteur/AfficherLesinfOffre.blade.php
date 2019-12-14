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
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="{{asset('profile.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{ __('Login') }}</b> </a>
                    </li>
                </ul>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <body>
        <div class="overlay" id="overlay">
        <div class="popup" id="popup">
                      <div class="form-group">
                        <!--pour quite-->
                        <div class="form-group">
                      <div class="col-md-12">
                      <h2 style="color:green">{{$offres->nom}}<span id="close" class="close"><a href="{{url('ConsulterOffre/'Auth::user()->id)}}"> &times; </span></a></h2><hr>
                      </div>
                     
                      <!--pour quite-->
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Intitulé:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->intitule}}/label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Domaine:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->diplome}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Diplome:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->nom}}</label>
                                     </div>
                                    </div>
                                    <br><br><br><br>
                                    <br><br><br>
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Comptences:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->competences}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Lieu de travialle:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->lieu}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Rémunération:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->remuneration}}</label>
                                     </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Durée CDD/Stage:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->duree}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Type D'offre:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->type}}</label>
                                     </div>
                                     <div class="col-md-4">
                                     <label style="color:black">Date de bébut prévu:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->debut_prevu}}</label>
                                     </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                     <div class="col-md-4">
                                     <label style="color:black">Date de dépot d'offre:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->depot_offre}}</label>
                                     </div>
                                     <div class="col-md-8">
                                    <label style="color:black">Description:</label>  
                                    <table>
                                    <tr><td>
                                    <textarea name="description" rows="5" cols="60"  name="description">
                                         {{$offres->description}}
                                          </textarea>
                                    </td></tr>
                                    </table>
                                    
                                    </div>
                                    </div>
                                    <div class="col-md-8">
                                    <label style="color:black">Adresse de travaille:</label>   <label for="example-text-input" class="col-2 col-form-label">{{$offres->lieuTrav}}</label>
                                    </div>
                                    <br><br><br><br>
                                    <br><br><br><br>
                                    <br><br>
                      </div>
                      </div>
                      </div>


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
