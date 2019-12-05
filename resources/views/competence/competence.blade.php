@extends('layouts.master');

@section('content')

<div class="overlaytitre" id="overlaytitre">
                  <div class="popuptitre" id="popuptitre">
                    <h2>Ajouter une compétence <span id="closetitre" class="closetitre"> &times; </span></h2><hr>
                   
                    
                    <form action= "{{url('cv')}}" method="POST">
    {{csrf_field()}}
                

                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Ma compétence</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="ma competence" name="competence" id="example-text-input">
                          </div>

                          <input type="submit" name = "" value="Enregister">
                        </div></form>
                            </div>


                     
      
                  </div><br><br><br><br><br><br><br><br><br><br><br>

                  @endsection