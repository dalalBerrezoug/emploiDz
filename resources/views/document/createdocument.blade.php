@extends('layouts.master');

@section('content')      
             
             <div class="overlaydoc" id="overlaydoc">
                  <div class="popupdoc" id="popupdoc">
                    <h2>Ajouter un Docuemnt <a href="{{url('Cv_Condidat')}}"><span id="closedoc" class="closedoc"> &times; </span></a></h2><hr>
                   
      
                
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
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" name="titre">
                          </div>
                        </div>

                        
                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Ajouter un docuement</label>
                          <form enctype="multipart/form-data" action="{{url('doc_ajouter/'.$id)}}" method="POST">
                          <input type="file" id="file" accept="image/*" name="avatar">
                               <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label for="file" class="image"><span class="oi oi-cloud-upload"></span>  &nbsp; &nbsp;choisir un document</label>
                          </div>
                          <input type="submit" name = "valider" value="Enregister">
                            </div> </form>


                   
      
                  </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                   @endsection