@extends("layouts.master")
@section('content')
<div class="form-bg" style="margin-top: 150px;">
        <div class="container">
        @foreach($recruteurs as $recruteurs)
          <div class="row col-lg-12" style="background-color: #18d26e;  bottom: 15px;"><h1><span  style="margin-top:20px; color:white">    {{$recruteurs->Nom_Rec}}</span></h1></div>
          <div class="row col-lg-12" style="background-color: white; margin-top: 10px;"> 
     
           
                <div class="row" style="margin-top: 50px; ">
                <div>
                    <img src="/uploads/avatars/{{$recruteurs->logo_avt}}" style="width: 100px; height: 100px;">
                </div>
                    <div style="margin-left: 20px;">
                            <span class="oi oi-person"> <strong>Type de l'entreprise:</strong> {{$recruteurs->type}}</span><br><br>
                            <span class="oi oi-map-marker"><strong>Adresse: </strong>   {{$recruteurs->Adresse}}</span>
                    </div>
                    <div style="margin-left: 150px;">
                            <span class="oi oi-envelope-closed"><strong>Email:</strong>    {{$recruteurs->Email}}</span><br><br>
                            <span class="oi oi-phone">  <strong>Téléphone </strong>  {{$recruteurs->Telephone}}</span><br><br>
                            <strong>Site web:</strong>  {{$recruteurs->Site_web}}<br><br>
                    </div>
                </div>

                @if (Route::has('login'))
                @auth 
                <form action="{{url('detail/8')}}" method="post">
    {{csrf_field()}}
    <input id="prodId" name="offres" type="hidden" value="0">
    <input id="prodId" name="rec" type="hidden" value=" {{$recruteurs->user_id}}">
    <input id="prodId" name="condidat" type="hidden" value="{{ Auth::user()->id }}">
    <input id="prodId" name="type" type="hidden" value="1">
        <input type="submit" value="Envoyez une condidature spontané" style="
       
            background: #18d26e;
            color: #fff;
            width: 300px;
            height: 44px;
            text-align: center;
            line-height: 1;
            font-size: 16px;
            border-radius: 10%;
            right: 15px;
            bottom: 15px;
            margin-top: 20px;
            cursor:pointer;
            margin-top:200px;
            margin-left:-0px;

}

            
            "></form> 
            @else 
            <form action="{{url('LogTous')}}" method="get">
    {{csrf_field()}}
   
        <input type="submit" value="Envoyez une condidature spontané" style="
       
            background: #18d26e;
            color: #fff;
            width: 300px;
            height: 44px;
            text-align: center;
            line-height: 1;
            font-size: 16px;
            border-radius: 10%;
            right: 15px;
            bottom: 15px;
            margin-top: 20px;
            cursor:pointer;
            margin-top:200px;
            margin-left:-0px;

}

            
            "></form>@endauth
              @endif
          </div><br>  @endforeach

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