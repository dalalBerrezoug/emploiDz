
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
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{ url('home') }}"><span class="oi oi-home">Home</span></a></li>
         
       
            

 <!--         
<a href="C:/Users/assia/Desktop/bootstrap/css/Login_v8/connecte.html">Se connecter</a></li>
          <li><button type="button" class="btn btn-outline-success btn-lg mb-2">ESPACE RECRUTEUR</button></li>
          <li>
              <button type="button" class="btn btn-success btn-lg mb-2">
                  <a href="C:/Users/assia/Desktop/bootstrap/css/Login_v8/index.html">
                 S'INSCRIRE </a>
               </button>&nbsp;&nbsp;&nbsp;
          </li> -->
    
</header>

<br>
<div class="form-bg" style="margin-top: 150px;">
        <div class="container">
          <div class="row">
          <div class="col-lg-4" style="background-color:beige;";>
            <div class="row"> <div class="profile-img" style="margin:40px;">
                        <img src="/uploads/avatars/{{$data['cond']->avatar}}" alt=""/>
                           <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" id="photo" name="photo"/>
                              
                            </div>-->
                        </div></div>
            <div class="row">
            <div class=" footer-contact" style="margin:20px;">
                <h4>{{ $data['cond']->nom }}  {{ $data['cond']->prenom }}</h4>
                <p>
                  
                  
                  <strong>Telephone:</strong> {{ $data['cond']->telephone}}<br>
                  <strong>Date de naissance:</strong> {{ $data['cond']->datenais }}<br>
                  <strong>Adresse:</strong> {{ $data['cond']->adresse }}<br>
                  <strong>E-mail:</strong> {{ $data['cond']->email }}<br>

                </p>
    
                <div class="social-links">
                  
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
                  
                  <a href="#{{ Auth::user()->linkdin }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
    
              </div>
              <div class="row"> <span style="margin-left:150px;font-color:black;"> <h2 style="color:#49EC64">Divers</h2></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-10">
            <table class="table">
                
                @if($data['divers'] )
               <tr> <td>Langaues que vous parlez:</td></tr>
               @foreach($data['divers'] as $div)
               <tr>
               <tr></td></tr>
             <tr> <td >{{$div->lang1}}</td><td >{{$div->lang2}}</td><td>{{$div->lang3}}</td></tr>
              
              @endforeach
              @endif
              @if($data['divers'] )
               <tr> <td>Loisirs que vous possédez:</td></tr>
               @foreach($data['divers'] as $div)
             <tr> <td >{{$div->loisirs1}}</td><td >{{$div->loisirs2}}</td></tr>
             <tr><td><label>Autre:{{$div->autre}}</label></td></tr>
              
              @endforeach
              @endif
               
            <tr></tr></table>

                     
                      <br><br>
                  </div></div>
                  
         
         
            </div>

          </div>


          <div class="col-lg-8" style="background-color:white";>
            
              
           
          
            
              
            <div class="row" style="background-color:beige;margin:10px;";>
          
            
            <div style="margin-left:200px;"> <h1>
            titre: @if($data['titre'] ){{$data['titre']->titre}}@endif</h1></div><br><br>
           </div><br><br>
           
          
          <div class="row"><h1 style="color:#49EC64"><span style="margin-left:200px";>Experiences</h1> </span></div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-10">
            <table class="table">
            @if($data['experience'])
            @foreach($data['experience'] as $exper)
              <tr>
                <td style="width:10px;">  {{$exper->titreposte}}</td>
                <td style="width:50px;">Du {{$exper->date_deb}}<br>Au {{$exper->date_fin}}</td>
              <td style="width:10px;"><h4> </h4><br></td>
              </tr>
              @endforeach
              @endif
              
               
            <tr></tr></table>

                     
                      <br><br>
                  </div></div>
                  
         
         
            <div class="row"> <span style="margin-left:200px";>  <h1 style="color:#49EC64">Formations</h1></span> 
           </div>
           <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-10">
            <table class="table">
            @if($data['formation'] )
            @foreach($data['formation'] as $exper)
              <tr>
                <td style="width:10px;"> {{$exper->titreformation}}</td>
                <td style="width:50px;">Du {{$exper->datedebut}}<br>Au {{$exper->datefin}}</td>
              <td style="width:10px;"><h4> </h4><br></td>
              </tr>
              @endforeach
              @endif
               
   </table>

                     
                      <br><br>
                  </div></div>
                  
                  <div class="row"> <span style="margin-left:200px;font-color:black;"> <h1 style="color:#49EC64">Competences</h1></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-12">
            <table class="table" >
            @if($data['competence'] )
            @foreach($data['competence'] as $comp)
              <tr>
                <td style="width:10px;"></td>
                <td>{{$comp->competence}}</td>
              
              @endforeach</tr>
              @endif
             </table>

                     
                      <br><br>
                  </div></div>
          
          
            <div class="row">  <span style="margin-left:200px";>  <h1 style="color:#49EC64">Documents</h1></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-12">
            <table class="table">
            @if($data['document'] )
            @foreach($data['document'] as $doc)
              <tr>
                <td style="width:10px;"></td>
                <td><img src="/uploads/avatars/{{$doc->doc}}" alt="..." class="img-thumbnail">
                
                </td>
                </tr>
                @endforeach
              @endif
              </table>

                     
                      <br><br>
                  </div></div>
        </div>




            
          </div>
         
              </div></div>
    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
          

          
                   
              
                
                






   <!-- <script src="{{ asset('bizPage/js/scriptcv.js')}}"></script>-->



