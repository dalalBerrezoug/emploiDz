@extends('layouts.master');

@section('content') 

<div class="overlayeditdoc" id="overlayeditdoc">
                      <div class="popupeditdoc" id="popupeditdoc">
                        <h2>Editer mon document <a href="{{url('Cv_Condidat')}}"><span id="closeeditdoc" class="closeeditdoc"> &times; </span></a></h2><hr>
                       
                        <form action= "{{url('Update/'.$doc->id)}}" method="get">
    <input type="hidden" name="_method" value="POST">
    {{csrf_field()}}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Type</label>
                        <div class="col-8">
                            <select class="form-control" id="exampleSelect1" name="type">
                                <option>Sélectionner...</option>
                                <option>Sertaficat</option>
                                <option>Diplome</option>
                                <option>Autre</option>
                                
                              </select></div>                        </div>
                      


                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Titre de document</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="{{$doc->titre}}" id="example-text-input" name="titre">
                          </div>
                        </div>

                        
                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Ajouter un docuement</label>
                            <input type="file" id="file" >
                            <label for="file" class="image"><span class="oi oi-cloud-upload"></span>  &nbsp; &nbsp;choisir un document</label>
                          </div>
                          <input type="submit" id="file" value="Modifier">
  
                         
                </div></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                @endsection