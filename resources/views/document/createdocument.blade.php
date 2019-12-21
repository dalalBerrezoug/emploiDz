@extends('layouts.master');

@section('content')      
             
             <div class="overlaydoc" id="overlaydoc">
                  <div class="popupdoc" id="popupdoc">
                    <h2>Ajouter un Docuemnt <span id="closedoc" class="closedoc"> &times; </span></h2><hr>
                   
                    <form action= "{{url('InsertionDocument')}}" method="get" enctype="multipart/form-data">
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
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" name="titre">
                          </div>
                        </div>

                        
                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Ajouter un docuement</label>
                            <input type="file" id="file" name="file" >
                            <label for="file" class="image"><span class="oi oi-cloud-upload"></span>  &nbsp; &nbsp;choisir un document</label>
                          </div>
                          <input type="submit" name = "" value="Enregister">
                            </div> </form>


                   
      
                  </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                   @endsection