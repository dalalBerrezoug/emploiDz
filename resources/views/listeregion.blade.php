@extends("layouts.master")
@section('content')
<div class="form-bg" style="margin-top: 150px;">
        <div class="container">
       

          <br><br>
          
          <div class="row">
         
          <div class="row col-lg-12" style="background-color: white;"><h4><span class="oi oi-align-right" style="margin-top: 10px;">    Liste des Offres </span></h4></div>
          
          @foreach($offres as $offres)
         
          <br>
           
<br><br>
          <div class="col-lg-4 col-md-6 mb-4"><br>
                  <div class="card h-100">
                    <div class="card-body">
                      <h4 class="card-title">
                        <a href="#">{{$offres->nom}}</a>
                        <hr>
                      </h4>
                      <p class="card-text"><strong>Recruteur:</strong><a href="{{url('offres/'.$offres->idrec)}}">  {{$offres->Nom_Rec}}</a></p>
                      <p class="card-text"><strong>Type de contract:</strong> {{$offres->type}} </p>
                      <p class="card-text"><strong>Lieu de Travail:</strong>  {{$offres->lieuTrav}}</p>
                      <p class="card-text"><strong>Crée le: </strong> {{$offres->created_at}}</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted"><a href="{{url('detail/'.$offres->id)}}">voir les détails</a></small>
                    </div>
                  </div>
                  </div> @endforeach</div>

                

               

          </div>
        
        
        
        
        </div></div>     @endsection