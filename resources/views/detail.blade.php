@extends("layouts.master")
@section('content')

<div class="container" style="margin-top: 200px; margin-left: 60px;margin-right: 1000px; " >
     
               
             
       
     @foreach($offres as $offres)
<div class="row" style=" background-color: white; margin-top: 5px;margin-left: 10px;">
        @foreach($Rec as $R)
        @if($R->user_id == $offres->rec_id )
        <div class="col-lg-3"> <img src="/uploads/avatars/{{$R->logo_avt}}" alt="" style="width:200px;"/></div>
        @endif
        @endforeach
        <div class="col-lg-6"><h5 style="margin-top: 5px;">
          <h2>  <strong>{{$offres->nom}}</strong></h2>
        
                
          <h6>{{$offres->lieuTrav}} &nbsp;&nbsp;&nbsp;&nbsp;<strong>crée le: </strong>   {{$offres->created_at}}</h6></div>




          
                
          

                          

          

        <div class="col-lg-3" >
        @if (Route::has('login'))
          @auth
        <form action="{{url('detail/8')}}" method="post">
    {{csrf_field()}}
    <input id="prodId" name="offres" type="hidden" value="{{$offres->id}}">
    <input id="prodId" name="rec" type="hidden" value="{{$offres->rec_id}}">
    <input id="prodId" name="condidat" type="hidden" value="{{ Auth::user()->id }}">
    <input id="prodId" name="type" type="hidden" value="0">
        <input type="submit" value="Postuler" style="
       
            background: #18d26e;
            color: #fff;
            width: 100px;
            height: 44px;
            text-align: center;
            line-height: 1;
            font-size: 16px;
            border-radius: 10%;
            right: 15px;
            bottom: 15px;
            margin-top: 20px;
            cursor:pointer;

}
          
            "></form>
           
            @else 
            <form action="{{ url('LogTous') }}" method="get">
    {{csrf_field()}}
    
        <input type="submit" value="Postuler" style="
       
            background: #18d26e;
            color: #fff;
            width: 100px;
            height: 44px;
            text-align: center;
            line-height: 1;
            font-size: 16px;
            border-radius: 10%;
            right: 15px;
            bottom: 15px;
            margin-top: 20px;
            cursor:pointer;

}
          
            "></form> @endauth  @endif</div>
        <br><br>
        
       
     </div>
     <div class="row" style=" background-color: white; margin-top: 5px;margin-left: 10px;">
        <table class="table ">
            <tr>
            <td><strong>Recruteur</strong></td>
                    <td>{{$offres->Nom_Rec}}</td>
                <td><strong>domaine</strong></td>
                <td>{{$offres->domaine}}</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                
            </tr>
            <tr>
            <td><strong>Diplome</strong></td>
                <td>{{$offres->diplome}}</td>
                    <td><strong>Date d'expiration</strong></td>
                    <td>{{$offres->debut_prevu}}</td>
                    <td></td>
                    
                </tr>
        </table>
            
            <br><br>
            
           
         </div>
         <div class="row" style=" margin-top: 5px;margin-left: 10px;">
            <div class="col-lg-8" style="background-color: white;">
                <h4>Description d'offre</h4>
                <ul>  
                {{$offres->description}}<br><br>
            </ul>  
                <h4>Compétences</h4>
                <lu>
                <span style="margin-left:40px;"> {{$offres->competences}}</span>
                </lu><br><br>
<br>

                <h4>Durée</h4>
                <p><span style="margin-left:40px;">{{$offres->duree}}</span></p><br><br>

                <h4>type d'offre</h4>
                 <p> <span style="margin-left:40px;">{{$offres->type}}</span></p><br><br>
                 <h4>Renumération</h4>
                  <p><span style="margin-left:40px;"> {{$offres->remuneration}}</span></p>
                  <h4>Nombre d'année d'experience</h4>
                  <p><span style="margin-left:40px;"> {{$offres->intitule}}</span></p>
            </div>

         </div> @endforeach
</div>




@endsection