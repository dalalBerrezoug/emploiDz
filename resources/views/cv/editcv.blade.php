@extends("layouts.master")
@section('content')




<div class="overlayedittitre" id="overlayedittitre">
                      <div class="popupedittitre" id="popupedittitre">
                        <h2>Editer le titre de cv <span id="closeedittitre" class="closeedittitre"> &times; </span></h2><hr>
                       

                        <form action= "{{url('cv/'.$cv->id)}}" method="POST">
    <input type="hidden" name="_method" value="POST">
    {{csrf_field()}}
                        
                             
                        <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Titre de CV</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="{{$cv->titre}}" name="titre" id="example-text-input" >
                            <input type="submit" name = "" value="Modifier">
                                
                          </div>
                        </div></form> </div>
                        </div><br><br><br></div><br><br><br></div><br><br><br>

                        @endsection