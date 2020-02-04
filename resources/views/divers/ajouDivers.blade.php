@extends('layouts.master');

@section('content')

<div class="overlayexp" id="overlayexp">
                          <div class="popupexp" id="popupexp">
                            <h2>Ajouter une Divers <a href="{{url('Cv_Condidat')}}"><span id="closeexp" class="closeexp"> &times; </span></a></h2><hr>
                            <form action= "{{url('inser_divers')}}" method="get">
                                      {{csrf_field()}}
                                      <h3>Langues que vous parlez</h3>
                           <div class="form-group row">
                              <label for="example-text-input" class="col-2 col-form-label">Langage 1</label>
                              <div class="col-2">
                                <input class="form-control" type="text" value="arab"  name="lang1">
                              </div>
                              <label for="example-text-input" class="col-2 col-form-label">Langage 2</label>
                                <div class="col-2">
                                  <input class="form-control" type="text" value=""  name="lang2">
                                </div>
                                <label for="example-date-input" class="col-2 col-form-label">Langage 3 </label>
                              <div class="col-2">
                                <input class="form-control" type="text" value=""  name="lang3">
                              </div>
                            </div>
    
                            <h3> Loisirs que vous possédez</h3>
                            <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label"> Loisir 1</label>
                                <div class="col-2">
                                  <input class="form-control" type="text" value="" name="loisir1">
                                </div>
                                <label for="example-date-input" class="col-2 col-form-label"> Loisir 2 </label>
                              <div class="col-2">
                                <input class="form-control" type="text" value=""  name="loisir2">
                              </div>
                              </div>


                            <div class="form-group row">
                                <label for="example-date-input" class="col-2 col-form-label">Autre </label>
                                <div class="col-5">
                                  <input class="form-control" type="text" value=""  name="autre">
                                </div>
                              </div>
                              <input type="submit" name = "" value="Enregister" class="btn btn-success btn-lg mb-2"></form>
    
                   
                            
              
                          </div> 
                          </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                          @endsection