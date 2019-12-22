@extends("layouts.master")
@section('content')

<div class="overlayeditform" id="overlayeditform">
                      <div class="popupeditform" id="popupeditform">
                        <h2>Editer ma formation <a href="{{url('Cv_Condidat')}}"><span id="closeeditform" class="closeeditform"> &times; </span></a></h2><hr>
                       
                       <  <form action= "{{url('Update/'.$form->id)}}" method="get">
    {{csrf_field()}}
                           
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label"> (Diplome) Titre de formation</label>
                        <div class="col-8">
                          <input class="form-control" type="text" value="{{$form->titreformation}}" id="example-text-input" name="titre">
                        </div>
                      </div>


                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Domaine</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="{{$form->domaine}}" id="example-text-input" name="domaine">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Etablissement</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="{{$form->lieu_formation}}" id="example-text-input" name="etablissement">
                          </div>
                        </div>

                        


                          <div class="form-group row">
                              <label for="exampleSelect1" class="col-2 col-form-label" value="{{$form->type_etat}}">Type de l'etablissement</label>
                              <div  class="col-8">
                              <select class="form-control" id="exampleSelect1" name="type">
                                <option>Sélectionner...</option>
                                <option>Université</option>
                                <option>Lycée</option>
                                <option>Ecole d'ingenieur</option>
                                <option>Ecole de commerce</option>
                                <option>Centre de formation</option>
                                <option>Autre</option>
                              </select>
                              
                            </div>
                            </div>


                     <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Date de debut </label>
                        <div class="col-5">
                          <input class="form-control" type="date" value="{{$form->datedebut}}" id="example-date-input" name="deb">
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="example-date-input" class="col-2 col-form-label">Date de fin </label>
                          <div class="col-5">
                            <input class="form-control" type="date" value="{{$form->datefin}}" id="example-date-input" name="fin">
                          </div>
                          <div class="col-lg-2"><input type="submit" name = "Modifier" value="Modifier"></form></div>
                        </div>
                        
  
                        
          
                      </div> 
                      </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      @endsection