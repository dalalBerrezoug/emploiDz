@extends('layouts.master');

@section('content')



       <div class="overlaytitre" id="overlaytitre">
                  <div class="popuptitre" id="popuptitre">
                    <h2>Ajouter un CV <span id="closetitre" class="closetitre"> &times; </span></h2><hr>
                    <form action= "{{url('titrecv')}}" method="get">
    {{csrf_field()}}
                
                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Titre de CV</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="titre" name="titre" id="example-text-input">
                          </div>

                          <input type="submit" name = "" value="Enregister" class="btn btn-success btn-lg mb-2">
                        </div></form>
                            </div>


                     
      
                  </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br>