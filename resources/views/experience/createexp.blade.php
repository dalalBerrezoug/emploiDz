@extends('layouts.master');

@section('content')

<div class="overlayexp" id="overlayexp">
                          <div class="popupexp" id="popupexp">
                            <h2>Ajouter une experience <span id="closeexp" class="closeexp"> &times; </span></h2><hr>
                            <form action= "{{url('InsertionExperience')}}" method="get">
                                      {{csrf_field()}}
                           <div class="form-group row">
                              <label for="example-text-input" class="col-2 col-form-label">Titre de poste</label>
                              <div class="col-8">
                                <input class="form-control" type="text" value="titreposte" id="example-text-input" name="titreposte">
                              </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Entreprise</label>
                                <div class="col-8">
                                  <input class="form-control" type="text" value="Artisanal kale" id="example-text-input" name="entreprise">
                                </div>
                              </div>

                              
    
    
                           <div class="form-group row">
                              <label for="example-date-input" class="col-2 col-form-label">Date de debut </label>
                              <div class="col-5">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="datedeb">
                              </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Date de fin </label>
                                <div class="col-5">
                                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input" name="datefin">
                                </div>
                              </div>
                              <input type="submit" name = "" value="Enregister"></form>
    
                   
                            
              
                          </div> 
                          </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                          @endsection