
@extends("layouts.master")
@section('content')

<div class="overlayeditexp" id="overlayeditexp">
                              <div class="popupeditexp" id="popupeditexp">
                                <h2>Editer ma experience <span id="closeeditexp" class="closeeditexp"> &times; </span></h2><hr>
                                <form action= "{{url('experience/'.$exp->id.'/exp')}}" method="POST">
    <input type="hidden" name="_method" value="POST">
    {{csrf_field()}}
                                        
                           <div class="form-group row">
                              <label for="example-text-input" class="col-2 col-form-label">Titre de poste</label>
                              <div class="col-8">
                                <input class="form-control" type="text" value="{{$exp->titreposte}}" id="example-text-input" name="titreposte">
                              </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Entreprise</label>
                                <div class="col-8">
                                  <input class="form-control" type="text" value="{{$exp->entreprise}}" id="example-text-input" name="entreprise">
                                </div>
                              </div>

                           <!--   <div class="form-group row">
                                  <label for="example-text-input" class="col-2 col-form-label">Lieu de travail</label>
                                  <div class="col-8">
                                    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                  </div>
                                </div>
    
    
                           <div class="form-group row">
                              <label for="example-date-input" class="col-2 col-form-label">Date de debut </label>
                              <div class="col-5">
                                <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                              </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Date de fin </label>
                                <div class="col-5">
                                  <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                                  <input type="submit" name = "" value="Modifier">
                                </div>
                              </div>-->
                              <input type="submit" name = "" value="Modifier">
                                    </form>
          
                                
                  
                              </div> 
                              </div><br<br><br><br><br><br> <br<br><br><br><br><br>  <br<br><br><br><br><br><br<br><br><br><br><br>
                              @endsection