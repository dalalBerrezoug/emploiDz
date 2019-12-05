@extends("layouts.master")
@section('content')

<br><br><br><br><br><br><br><br>
<div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >    Experiences</span></h4> <a href="{{url('experience/createexp')}}"><span class="oi oi-plus plusexp" id="plusexp" style="margin-left: 500px;margin-top: 20px;"></span></a></div>
                <div class="row col-lg-8" style="background-color: white; margin-top: 2px;" v-for="experience in experiences"> 
                
                      <div class="row" style="margin-top: 50px; margin-left:30px ;">
                      
                          @foreach($exp as $exp)
                          <div style="margin-left: 10px;">
                                <span class="oi oi-badge"> {{$exp->titreposte}}</span><a href=""><a href="{{url('experience/'.$exp->id.'/editexp')}}">  <span class="oi oi-pencil editexp" id="editexp" style="margin-left: 500px;"></span></a><br><br>
                                <span class="oi oi-ellipses">   {{$exp->entreprise}}</span>   <br><br>
                                  <span class="oi oi-map-marker"> {{$exp->datedeb}}</span><br><br>
                                  <span class="oi oi-calendar"> {{$exp->datefin}}  </span><br><br>
                                  <hr>
                          </div>@endforeach
                          <br><br>
                      </div><br><br><br><br><br><br>
               
        
        
                 </div>
                 @endsection