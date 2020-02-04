@extends("layouts.master")
@section('content')


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
                <h4>{{ Auth::user()->name }}{{ Auth::user()->prenom }}</h4>
                <p>
                  
                  
                  <strong>Telephone:</strong>  @if($data['cond'] ){{ $data['cond']->telephone}}@endif<br>
                  <strong>Date de naissance:</strong>@if($data['cond'] ) {{ $data['cond']->datenais }}@endif<br>
                  <strong>Adresse:</strong>@if($data['cond'] ) {{ $data['cond']->adresse }}@endif<br>
                  <strong>E-mail:</strong>@if($data['cond'] ) {{ $data['cond']->email }}@endif<br>

                </p>
    
                <div class="social-links">
                  
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
                  
                  <a href="#{{ Auth::user()->linkdin }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
    
              </div>
              <div class="row"> <span style="margin-left:150px;font-color:black;"> <h2>Divers</h2></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-10">
            <table class="table">
                
                @if($data['divers'] )
               <tr> <td>Langaues que vous parlez:</td></tr>
               @foreach($data['divers'] as $div)
               <tr>
               <tr><td ><a href="{{url('update_diver/'.$div->id)}}"> <span class="oi oi-pencil editexp" id="editexp"></span></a></td></tr>
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
               
            <tr><td colspan=2><a href="{{url('divers')}}"><span class="oi oi-plus">Ajouter divers</span></a></td></tr></table>

                     
                      <br><br>
                  </div></div>
                  
         
         
            </div>

          </div>


          <div class="col-lg-8" style="background-color:white";>
            
              
           
          
            
              
            <div class="row" style="background-color:beige;margin:10px;";>
          
            <a href="{{url('TitreCv')}}">
            <span class="oi oi-pencil editexp" id="editexp" style="margin-left:10px;margin-top:30px;"></span></a>
            <div style="margin-left:200px";> <h1>
            titre: @if($data['titre'] ){{$data['titre']->titre}}@endif</h1></div><br><br>
           </div><br><br>
           
          
          <div class="row"> <span style="margin-left:200px;font-color:black;"> <h1>Experiences</h1></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-10">
            <table class="table">
            @if($data['experience'])
            @foreach($data['experience'] as $exper)
              <tr>
                <td style="width:10px;"><a href="{{url('UpdateExperience/'.$exper->id)}}"> <span class="oi oi-pencil editexp" id="editexp"></span></a>  {{$exper->titreposte}}</td>
                <td style="width:50px;">Du {{$exper->date_deb}}<br>Au {{$exper->date_fin}}</td>
              <td style="width:10px;"><h4> </h4><br></td>
              </tr>
              @endforeach
              @endif
              
               
            <tr><td colspan=2><a href="{{url('AjouterExperience')}}">Ajouter une autre experience</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
                  
         
         
            <div class="row"> <span style="margin-left:200px";>  <h1>Formations</h1></span> 
           </div>
           <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-10">
            <table class="table">
            @if($data['formation'] )
            @foreach($data['formation'] as $exper)
              <tr>
                <td style="width:10px;"><a href="{{url('UpdateFormarion/'.$exper->id)}}"> <span class="oi oi-pencil editexp" id="editexp"></span></a>  {{$exper->titreformation}}</td>
                <td style="width:50px;">Du {{$exper->datedebut}}<br>Au {{$exper->datefin}}</td>
              <td style="width:10px;"><h4> </h4><br></td>
              </tr>
              @endforeach
              @endif
               
            <tr><td colspan=2><a href="{{url('AjouterFormarion')}}">Ajouter une autre formation</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
                  
                  <div class="row"> <span style="margin-left:200px;font-color:black;"> <h1>Competences</h1></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-12">
            <table class="table" >
            @if($data['competence'] )
            @foreach($data['competence'] as $comp)
              <tr>
                <td style="width:10px;"><a href="{{url('UpdayeCompetence/'.$comp->id)}}">  <span class="oi oi-pencil editexp" id="editexp"></span></a></td>
                <td>{{$comp->competence}}</td>
              
              @endforeach</tr>
              @endif
              <tr><td  colspan=2><a href="{{url('AjouterCompetence')}}">Ajouter une competence</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
          
          
            <div class="row">  <span style="margin-left:200px";>  <h1>Documents</h1></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-12">
            <table class="table">
            @if($data['document'] )
            @foreach($data['document'] as $doc)
              <tr>
                <td style="width:10px;"><a href="{{url('UpdateDocument/'.$doc->id)}}">  <span class="oi oi-pencil editexp" id="editexp"></span></a></td>
                <td><img src="/uploads/avatars/{{$doc->doc}}" alt="..." class="img-thumbnail">
                
                </td>
                </tr>
                @endforeach
              @endif
              <tr><td  colspan=2><a href="{{url('AjouterDocument/'.$data['titre']->id)}}">Ajouter un document</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
        </div>




            
          </div>
         
              </div></div>
    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
          

          
                   
              
                
                






   <!-- <script src="{{ asset('bizPage/js/scriptcv.js')}}"></script>-->


@endsection
