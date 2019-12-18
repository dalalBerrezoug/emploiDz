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
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="{{url('Accuiel')}}"><b>Emploi.dz</b></a></div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs nav-menu">
                 <li><a href="{{ url('actualite') }}">Actualités</a></li>
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="{{asset('profile.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"> {{ Auth::user()->name }}</b> </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        @yield('nav')
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="{{asset('tablebord')}}" class="waves-effect"><span class="oi oi-box"> Tableau de bord</span></a>
                    </li>
                     <li>
                        <a href="{{ url('Accuiel') }}" class="waves-effect"><span class="oi oi-account-logout"> Aller au site</span></a>
                    </li>
                    <li>
                        <a href="{{url('AffichageContect/'.Auth::user()->id)}}" class="waves-effect"><span class="oi oi-person"> Contact</span></a>
                    </li>
                    <li>
                        <a href="{{url('InfoRec/'.Auth::user()->id)}}" class="waves-effect"><span class="oi oi-people"> Récruteur</span></a>
                    </li>



                      <li>
                        <a><span class="oi oi-briefcase"> Options Offres</span></a>
                       
                        <ul>
                        <li><a href="{{url('AjouterOffre')}}">Ajouter offre</a></li>
                        <li><a href="{{url('ConsulterOffre/'.Auth::user()->id)}}">Consulter Mes offres</a></li>
                        </ul>
                    </li>
                    </ul>
                    <div class="center p-20">
                    <a target="_blank" class="btn btn-danger btn-block btn-rounded waves-effect waves-light" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       Deconxion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </div>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->



<!--                    contenu  -->
                 @yield('contenu')




        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2020 &copy; Emploi.dz</footer>
        </div>
        <!-- /#page-wrapper -->
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
