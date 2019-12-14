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
                        <a class="profile-pic" href="#"> <img src="{{asset('profile.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name }}</b> </a>
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
                      <span id="close" class="close"><a href="{{url('InfoRec/'.Auth::user()->id)}}"> &times; </span></a><hr>
                      </div>
                     
                      <!--pour quite-->
                      <form method="get" action="{{url('Profil/update/'.Auth::user()->id)}}">
                      {{csrf_field()}}
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Le Nom de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" placeholder="Nom D'entreprise" class="form-control form-control-line" name="name">
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black"> Logo l' Enreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" placeholder="LOGO" class="form-control form-control-line" name="logo">
                                    </div>
                                    </div><br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Email de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="email" placeholder="Email" class="form-control form-control-line" name="email">
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Site de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" placeholder="entre le site" class="form-control form-control-line" name="site">
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">l'Adresse de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" placeholder="l'Adresse" class="form-control form-control-line" name="adr">
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Numéro de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <input type="text" placeholder="Numero ....." class="form-control form-control-line" name="num">
                                    
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-6">
                                    <label style="color:black">Type de l'Entreprise:</label>
                                    </div>
                                    <div class="col-md-6">
                                    <select class="form-control form-control-line" name="type">
                                            <option>société</option>
                                            <option>public</option>
                                            
                                        </select>

                                    
                                    </div>
                                    </div>
                                    <br><br>
                                    <div class="col-md-12">
                      <div class="col-md-1"></div>
                      </div>
                      <div class="col-md-10"></div>
                      </div>
                      <div class="col-md-1"></div>
                      <button class="btn btn-success" type="submit">Confermier La modification</button>
                      <form>
                      </div>
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
