@extends("layouts.master")
@section('content')

<div class="overlay" id="overlay">
                      <div class="popup" id="popup">
                        <h2>Editer les informations personnelles <a href="{{url('ProfilCondidat')}}"><span id="close" class="close"> &times; </span></a></h2><hr>
                       
                        <form action= "{{url('ConferUpdateCondidat')}}" method="get">
    <input type="hidden" name="_method" value="POST">
    {{csrf_field()}}

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Civilité</label>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="civilite" id="inlineRadio1" value="Monsieur"> Monsieur
                                </label>
                              </div>
                              <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="civilite" id="inlineRadio2" value="Madame"> Madame
                                </label>
                              </div>
                              <div class="form-check form-check-inline ">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="civilite" id="inlineRadio3" value="Mademoiselle"> Mademoiselle
                                  </label>
                                </div>
                              <div style="margin-left:200px;">
                                <input type="file" id="file" accept="image/*" name="photo">
                                <label for="file" class="image"><span class="oi oi-cloud-upload"></span>  &nbsp; &nbsp;choisir une image</label>
                              </div>
                              
                              </div>

                       <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Nom</label>
                          <div class="col-10">
                            <input class="form-control" type="text" value="{{ $cond->nom }}" id="example-text-input" name="name">
                          </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Prenom</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="{{ $cond->prenom }}" id="example-text-input" name="prenom">
                            </div>
                          </div>


                       <div class="form-group row">
                          <label for="example-date-input" class="col-2 col-form-label">Date de naissance</label>
                          <div class="col-5">
                            <input class="form-control" type="date" value="{{ $cond->datenais }}" id="example-date-input" name="datenais">
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                            <div class="col-4">
                              <input class="form-control" type="email" value="{{Auth::user()->email}}" id="example-email-input" name="email">
                            </div>
                            <label for="example-url-input" class="col-1 col-form-label">Lien linkdin</label>
                                  <div class="col-5">
                                    <input class="form-control" type="url" value="{{$cond->linkdin}}" id="example-url-input" name="linkdin">
                                  </div>
                          </div>


                          <div class="form-group row">
                              <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                              <div class="col-10">
                                <input class="form-control" type="tel" value="{{$cond->telephone}}" id="example-tel-input" name="telephone">
                              </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Adresse</label>
                                <div class="col-5">
                                  <input class="form-control" type="text" value="{{$cond->adresse}}" id="example-text-input" name="adresse">
                                
                                </div>
                                <div class="col-5">
                                  <input  type="submit" value="Modifier" id="example-text-input" class="btn btn-success btn-lg mb-2">
                                
                                </div>
                              </div>

                              </form>
                        
          
                      </div> 
                      </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      @endsection