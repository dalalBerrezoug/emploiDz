@extends("layouts.master")
@section('content')

<div class="container" style="margin-top: 200px; margin-left: 60px;margin-right: 1000px; " >
     
               
             
       
     @foreach($offres as $offres)
<div class="row" style=" background-color: white; margin-top: 5px;margin-left: 10px;">
        <div class="col-lg-3"><img src=img/icon/e1.png></div>
        <div class="col-lg-6"><h5 style="margin-top: 5px;"><h5>
        {{$offres->nom}}
        
                </h5>
          <h6>{{$offres->lieuTrav}} &nbsp;&nbsp;&nbsp;&nbsp; {{$offres->created_at}}</h6></div>




          
                
          

                          



        <div class="col-lg-3" >
        <form action="{{url('detail/8')}}" method="post">
    {{csrf_field()}}
    <input id="prodId" name="offres" type="hidden" value="{{$offres->id}}">
    <input id="prodId" name="rec" type="hidden" value="{{$offres->rec_id}}">
    <input id="prodId" name="condidat" type="hidden" value="{{ Auth::user()->id }}">
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

            
            "></form></div>
        <br><br>
        
       
     </div>
     <div class="row" style=" background-color: white; margin-top: 5px;margin-left: 10px;">
        <table class="table ">
            <tr>
                <td>Secteur d'activité</td>
                <td>{{$offres->domaine}}</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>Diplome</td>
                <td>{{$offres->diplome}}</td>
            </tr>
            <tr>
                    <td>Date d'expiration</td>
                    <td>09 janvier 2020</td>
                    <td></td>
                    <td>Nombre de postes</td>
                    <td>1 poste</td>
                </tr>
        </table>
            
            <br><br>
            
           
         </div>
         <div class="row" style=" margin-top: 5px;margin-left: 10px;">
            <div class="col-lg-8" style="background-color: white;">
                <h4>Description d'offre</h4>
                <ul>  
                {{$offres->description}}
            </ul>  
                <h4>Compétences</h4>
                <lu>{{$offres->competences}}</lu>
<br>

                <h4>Durée</h4>
                <p>{{$offres->duree}}</p>

                <h4>type d'offre</h4>
                 <p> {{$offres->type}}</p>
                 <h4>Renumération</h4>
                  <p> {{$offres->remuneration}}</p>
            </div>

         </div> @endforeach
</div>




@endsection