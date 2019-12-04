@extends("layouts.master")
@section('content')

<div class="overlay" id="overlay">
                      <div class="popup" id="popup">
                        <h2>Editer les informations personnelles <span id="close" class="close"> &times; </span></h2><hr>
                       


                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Civilité</label>
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Monsieur
                                </label>
                              </div>
                              <div class="form-check form-check-inline ">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Madame
                                </label>
                              </div>
                              <div class="form-check form-check-inline ">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Mademoiselle
                                  </label>
                                </div>
                              <div style="margin-left:200px;">
                                <input type="file" id="file" accept="image/*">
                                <label for="file" class="image"><span class="oi oi-cloud-upload"></span>  &nbsp; &nbsp;choisir une image</label>
                              </div>
                              
                              </div>

                       <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Nom</label>
                          <div class="col-10">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                          </div>
                        </div>


                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Prenom</label>
                            <div class="col-10">
                              <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                            </div>
                          </div>


                       <div class="form-group row">
                          <label for="example-date-input" class="col-2 col-form-label">Date de naissance</label>
                          <div class="col-5">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-email-input" class="col-2 col-form-label">Email</label>
                            <div class="col-4">
                              <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                            </div>
                            <label for="example-url-input" class="col-1 col-form-label">Lien linkdin</label>
                                  <div class="col-5">
                                    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                  </div>
                          </div>


                          <div class="form-group row">
                              <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
                              <div class="col-10">
                                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
                              </div>
                            </div>

                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Adresse</label>
                                <div class="col-10">
                                  <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                </div>
                              </div>

  
                        
          
                      </div> 
                      </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                      @endsection