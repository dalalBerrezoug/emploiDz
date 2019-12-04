@extends("layouts.master")
@section('content')


<br>
<div class="form-bg" style="margin-top: 150px;">
        <div class="container">
          <div class="row">
          <div class="col-lg-4" style="background-color:beige;";>
            <div class="row"> <div class="profile-img" style="margin:40px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                           <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" id="photo" name="photo"/>
                              
                            </div>-->
                        </div></div>
            <div class="row">
            <div class=" footer-contact" style="margin:20px;">
                <h4>{{ Auth::user()->name }}{{ Auth::user()->prenom }}</h4>
                <p>
                  
                  
                  <strong>Telephone:</strong> {{ Auth::user()->telephone }}<br>
                  <strong>Date de naissance:</strong> {{ Auth::user()->datenais }}<br>
                  <strong>Adresse:</strong> {{ Auth::user()->adresse }}<br>
                  <strong>E-mail:</strong> {{ Auth::user()->email }}<br>

                </p>
    
                <div class="social-links">
                  
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> &nbsp;&nbsp;&nbsp;
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
                  
                  <a href="#{{ Auth::user()->linkdin }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
                </div>
    
              </div>
            </div>

          </div>


          <div class="col-lg-8" style="background-color:white";>
            
              
           
          
            
              
            <div class="row" style="background-color:beige;margin:10px;";> @foreach($cv as $cv)
            <a href="{{url('cv/'.$cv->id.'/editcv')}}">
            <span class="oi oi-pencil editexp" id="editexp" style="margin-left:10px;margin-top:30px;"></span></a>
            <div style="margin-left:200px";><h1> {{$cv->titre}} </h1>@endforeach</div><br><br>
           
           </div><br><br>
           
          
          <div class="row"> <span style="margin-left:200px;font-color:black;"> <h1>Competences</h1></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-12">
            <table class="table" >@foreach($comp as $comp)
              <tr>
                <td style="width:10px;"><a href="{{url('indexcompetence/'.$comp->id.'/editcomp')}}">  <span class="oi oi-pencil editexp" id="editexp"></span></a></td>
                <td>{{$comp->competence}}</td>
              
              @endforeach</tr>
              <tr><td colspan=2><a href="{{url('indexcompetence/createcomp')}}">Ajouter une autre competence</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
          
         
         
            <div class="row"> <span style="margin-left:200px";>  <h1>Formations</h1></span> 
           </div>
           <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-10">
            <table class="table">@foreach($form as $form)
              <tr>
                <td style="width:10px;"><a href="{{url('indexformation/'.$form->id.'/editform')}}"> <span class="oi oi-pencil editexp" id="editexp"></span></a></td>
                <td style="width:50px;">Du {{$form->datedebut}}<br>Au {{$form->datefin}}</td>
              <td style="width:10px;"><h4>{{$form->titreformation}} </h4><br>{{$form->etablissement}}</td>
              @endforeach</tr>
            <tr><td colspan=2><a href="{{url('indexformation/createform')}}">Ajouter une autre formation</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
                  
            <div class="row"> <span style="margin-left:200px";>  <h1>Experiences</h1></span></div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-12">
            <table class="table">@foreach($exp as $exp)
              <tr>
                <td style="width:10px;"><a href="{{url('experience/'.$exp->id.'/editexp')}}">  <span class="oi oi-pencil editexp" id="editexp""></span></a></td>
                <td style="width:200px;">Du {{$exp->datedeb}}<br>Au {{$exp->datefin}}</td>
              <td><h4> {{$exp->entreprise}}</h4><br>{{$exp->titreposte}}</td>
              @endforeach</tr>
              <tr><td  colspan=2><a href="{{url('experience/createexp')}}">Ajouter une experience</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
          
          
            <div class="row">  <span style="margin-left:200px";>  <h1>Documents</h1></span> </div>
            <div class="row" style="margin-top: 50px; margin-left:30px ;">
            <div class="col-lg-12">
            <table class="table">@foreach($doc as $doc)
              <tr>
                <td style="width:10px;"><a href="{{url('indexdocument/'.$doc->id.'/editdoc')}}">  <span class="oi oi-pencil editexp" id="editexp""></span></a></td>
                <td>{{$doc->type}}: {{$doc->titre}}</td>
              
              @endforeach</tr>
              <tr><td  colspan=2><a href="{{url('indexdocument/createdocument')}}">Ajouter un document</a></td></tr></table>

                     
                      <br><br>
                  </div></div>
        </div>




            
          </div>
         
              </div></div>
    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
          

          
                   
              
                
                






   <!-- <script src="{{ asset('bizPage/js/scriptcv.js')}}"></script>-->


@endsection
