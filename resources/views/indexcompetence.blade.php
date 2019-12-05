@extends("layouts.master")
@section('content')

<br><br><br><br><br>
<div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >   Compétences</span></h4><a href="{{url('indexcompetence/createcomp')}}"> <span class="oi oi-plus plusexp" id="plusexp" style="margin-left: 500px;margin-top: 20px;"></span></a></div>
                   <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                   {{ Auth::user()->name }}
                   <div class="row" style="margin-top: 50px; margin-left:30px ;">
                      
                      @foreach($comp as $comp)
                      <div style="margin-left: 10px;">
                            <span class="oi oi-badge"> {{$comp->competence}}</span><a href=""><a href="{{url('indexcompetence/'.$comp->id.'/editcomp')}}">  <span class="oi oi-pencil editexp" id="editexp" style="margin-left: 500px;"></span></a><br><br>
                           
                              <hr>
                      </div>@endforeach
                      <br><br>
                  </div><br><br><br><br><br><br>
                  
           
           
                    </div>
                    @endsection