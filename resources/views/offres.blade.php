@extends("layouts.master")
@section('content')
<div class="form-bg" style="margin-top: 150px;">
        <div class="container">
        @foreach($recruteurs as $recruteurs)
          <div class="row col-lg-12" style="background-color: white;"><h4><span class="oi oi-align-right" style="margin-top: 10px;">    {{$recruteurs->Nom_Rec}}</span></h4></div>
          <div class="row col-lg-12" style="background-color: white; margin-top: 2px;"> 
     
           
                <div class="row" style="margin-top: 50px; ">
                <div>
                    <img src="C:\Users\assia\Desktop\bootstrap\css\BizPage\img\icon\personne.png" style="width: 100px; height: 100px;">
                </div>
                    <div style="margin-left: 20px;">
                            <span class="oi oi-person"> <span style="font-size:20px;">Type de l'entreprise:</span>  {{$recruteurs->type}}</span><br><br>
                            <span class="oi oi-map-marker">   {{$recruteurs->Adresse}}</span>
                    </div>
                    <div style="margin-left: 150px;">
                            <span class="oi oi-envelope-closed">    {{$recruteurs->Email}}</span><br><br>
                            <span class="oi oi-phone">    {{$recruteurs->Telephone}}</span><br><br>
                           <span style="font-size:20px;">Site web:</span>  {{$recruteurs->Site_web}}<br><br>
                    </div>
                </div>
          </div>  @endforeach

          <br><br>
         
          <div class="row">
          <div class="row col-lg-12" style="background-color: white;"><h4><span class="oi oi-align-right" style="margin-top: 10px;">    Liste des Offres</span></h4></div>
          
         
         
          <br>
            @foreach($offres as $offres)
<br><br>
          <div class="col-lg-4 col-md-6 mb-4"><br>
                  <div class="card h-100">
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">{{$offres->nom}}</a>
                        <hr>
                      </h4>
                      
                      <p class="card-text">Type de contract: {{$offres->type}} </p>
                      <p class="card-text">Lieu de Travail: {{$offres->lieuTrav}}</p>
                      <p class="card-text">Crée le: {{$offres->created_at}}</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted"><a href="{{url('detail/'.$offres->id)}}">voir les détails</a></small>
                    </div>
                  </div>
                  </div> @endforeach</div>

                

               

          </div>
        
        
        
        
        </div></div>     @endsection