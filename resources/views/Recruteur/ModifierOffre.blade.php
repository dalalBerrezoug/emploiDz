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
        <!--pour quite-->
                      <div class="form-group">
                      <div class="col-md-12">
                      <span id="close" class="close"><a href="{{url('ConsulterOffre')}}"> &times; </span></a><hr>
                      </div>
                     
                      <!--pour quite-->
                      <form method="post" action="{{url('Offre/'.$offre->id.'/update')}}">
                                    <input type="hidden" name="_method" value="PUT">
                                              {{csrf_field()}}
                                    <div class="col-md-12">
                                    <div class="col-md-4">
                                    <input type="text" value="{{$offre->nom}}" class="form-control form-control-line" name="nom">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" value="{{$offre->intitule}}" class="form-control form-control-line" name="intitule">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" value="{{$offre->lieuTrav}}" class="form-control form-control-line" name="lieu">
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-4">
                                    <input type="text" value="{{$offre->competences}}" class="form-control form-control-line" name="comp">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" value="{{$offre->domaine}}" class="form-control form-control-line" name="domaine">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" value="{{$offre->diplome}}" class="form-control form-control-line" name="diplome">
                                    </div>
                                    </div><br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-4">
                                    <input type="datetime-local" value="{{$offre->duree}}" class="form-control form-control-line" name="duree">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="text" value="{{$offre->remuneration}}" class="form-control form-control-line" name="remun">
                                    </div>
                                    <div class="col-md-4">
                                    <input type="date" value="{{$offre->debut_prevu}}" class="form-control form-control-line" name="debut_prevu">
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <div class="col-md-4">
                                    <input type="date" value="{{$offre->depot_offre}}" class="form-control form-control-line" name="depot_offre">
                                    </div>
                                    <div class="col-md-8">

                                    
                                    </div>
                                    </div>
                                    <br><br><br><br>
                                    <div class="col-md-12">
                                    <select class="form-control form-control-line" name="type">
                                            <option>Stage</option>
                                            <option>CDI</option>
                                            <option>CDD</option>
                                            
                                        </select>
                                        </div>
                                    <div class="row">
                                    <div class="col-md-8">
                                    <label><b>Description:</b></label>
                                        <br/>
                                         <textarea name="description" rows="5" cols="60"  name="description">
                                         {{$offre->description}}
                                          </textarea>
                                    </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                    <div class="col-md-8">
                                    
                                    <button  type="submit" class="btn btn-success">
                                    Confermier La modification
                                    </button>
                                    <form>
                                    </div>
                                    </div>
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
