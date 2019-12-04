@extends("layouts.master")
@section('content')

<br><br><br><br>
<div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >    Formations</span></h4><a href="{{url('indexformation/createform')}}"> <span class="oi oi-plus forma" id="forma" style="margin-left: 500px;margin-top: 20px;"></span></a></div>
                 <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                 
                       <div class="row" style="margin-top: 50px; margin-left:30px ;">
                           
                           <div style="margin-left: 10px;">
                                 <span class="oi oi-badge">  Titre formation</span> <a href="">  <span class="oi oi-pencil editexp" id="editexp" style="margin-left: 500px;"></span></a><br><br>
                                 <span class="oi oi-ellipses">   Domaine</span>   <br><br>
                                   <span class="oi oi-map-marker">   Nom de l'établissement</span><br><br>
                                   <span class="oi oi-calendar">    date debut -  date fin</span><br><br>
                           </div>
                           <br><br>
                       </div><br><br><br><br><br><br>
                
         
         
                  </div>
                  <br><br<<br><br><br><br><br><br><br<<br><br><br><br><br><br><br<<br><br><br><br><br><br><br<<br><br><br><br><br>
                  @endsection