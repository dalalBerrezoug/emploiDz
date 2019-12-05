@extends("layouts.master")
@section('content')


<br><br><br><br><br>
<div class="form-bg" style="margin-top: 150px;">
        <div class="container">
          <div class="row col-lg-8" style="background-color: white;"><h4><span class="oi oi-align-right" style="margin-top: 10px;">    Mon cv</span></h4> <span class="oi oi-pencil edit" id="edit" style="margin-left: 650px;margin-top: -40px;"></span></div>
          <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
           <div class="row"><h2 style="margin-left: 20px;"> Dalal Berrezoug <br></h2>
           </div>
                <div class="row" style="margin-top: 50px; margin-left:-200px ;">
                    <img src="C:\Users\assia\Desktop\bootstrap\css\BizPage\img\icon\personne.png" style="width: 100px; height: 100px;">
                    <div style="margin-left: 20px;">
                            <span class="oi oi-person">   21 ans</span><br><br>
                            <span class="oi oi-map-marker">   Tlemcen,Algerie</span>
                    </div>
                    <div style="margin-left: 150px;">
                            <span class="oi oi-envelope-closed">    dalal.berrezoug@gmail.com</span><br><br>
                            <span class="oi oi-phone">    0558 72 26 48</span><br><br>
                            <img src="C:\Users\assia\Desktop\bootstrap\css\BizPage\img\icon\in.png" style="width: 20px;height: 20px;"> lien linkdin<br><br>
                    </div>
                </div>
          </div>  
         <!--<div class="overlay" id="overlay">
            <div class="popup" id="popup">
              <h2>Editer les informations personnelles <span id="close" class="close"> &times; </span></h2><hr>
              <input type="text" name="nom" placeholder="Nom" class="col-lg-5">
              <input type="text" name="nom" placeholder="Prenom" class="col-lg-5">

            </div> 
            </div>-->

          
                
                <div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >    Experiences</span></h4><a href="{{url('cv.create')}}" <span class="oi oi-plus plusexp" id="plusexp" style="margin-left: 500px;margin-top: 20px;"></span></div>
                <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                
                      <div class="row" style="margin-top: 50px; margin-left:30px ;">
                          
                          <div style="margin-left: 10px;">
                                <span class="oi oi-badge">  Titre de poste</span> <span class="oi oi-pencil editexp" id="editexp" style="margin-left: 500px;"></span><br><br>
                                <span class="oi oi-ellipses">   Entreprise</span>   <br><br>
                                  <span class="oi oi-map-marker">   lieu de travail</span><br><br>
                                  <span class="oi oi-calendar">    date debut -  date fin</span><br><br>
                          </div>
                          <br><br>
                      </div><br><br><br><br><br><br>
               
        
        
                 </div>


                
                 


                 <div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >    Formations</span></h4> <span class="oi oi-plus forma" id="forma" style="margin-left: 500px;margin-top: 20px;"></span></div>
                 <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                 
                       <div class="row" style="margin-top: 50px; margin-left:30px ;">
                           
                           <div style="margin-left: 10px;">
                                 <span class="oi oi-badge">  Titre formation</span> <span class="oi oi-pencil editform" id="editform" style="margin-left: 500px;"></span><br><br>
                                 <span class="oi oi-ellipses">   Domaine</span>   <br><br>
                                   <span class="oi oi-map-marker">   Nom de l'établissement</span><br><br>
                                   <span class="oi oi-calendar">    date debut -  date fin</span><br><br>
                           </div>
                           <br><br>
                       </div><br><br><br><br><br><br>
                
         
         
                  </div>

                  <div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >   Documents</span></h4> <span class="oi oi-plus plusdoc" id="plusdoc" style="margin-left: 500px;margin-top: 20px;"></span></div>
                  <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                  
                        <div class="row" style="margin-top: 50px; margin-left:30px ;">
                            
                            <div style="margin-left: 10px;">
                                <span class="oi oi-file"> Titre de document</span> <span class="oi oi-pencil editdoc" id="editdoc" style="margin-left: 500px;"></span><br><br>
                                  
                            </div>
                            <br><br>
                        </div><br><br><br><br><br><br>
                 
          
          
                   </div>

                   <div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >   Compétences</span></h4> <span class="oi oi-plus plusexp" id="plusexp" style="margin-left: 500px;margin-top: 20px;"></span></div>
                   <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                   
                         <div class="row" style="margin-top: 50px; margin-left:30px ;">
                             
                             <div style="margin-left: 10px;">
                                 
                                   
                             </div>
                             <br><br>
                         </div><br><br><br><br><br><br>
                  
           
           
                    </div>

                    <div class="row col-lg-8" style="background-color: white; margin-top: 10px;"><h4><span class="oi oi-align-right" style="margin-top: 10px;" >  Divers</span></h4> <span class="oi oi-plus plusexp" id="plusexp" style="margin-left: 500px;margin-top: 20px;"></span></div>
                   <div class="row col-lg-8" style="background-color: white; margin-top: 2px;"> 
                   
                         <div class="row" style="margin-top: 50px; margin-left:30px ;">
                             
                             <div style="margin-left: 10px;">
                                 
                                   
                             </div>
                             <br><br>
                         </div><br><br><br><br><br><br>
                  
           
           
                    </div>
 
          <!-------------------informations personnelles-->
    
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
                      </div>

                      <!-------------------experience------------------------>
                      <div class="overlayexp" id="overlayexp">
                          <div class="popupexp" id="popupexp">
                            <h2>Ajouter une experience <span id="closeexp" class="closeexp"> &times; </span></h2><hr>
                           
                           <div class="form-group row">
                              <label for="example-text-input" class="col-2 col-form-label">Titre de poste</label>
                              <div class="col-8">
                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                              </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Entreprise</label>
                                <div class="col-8">
                                  <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                </div>
                              </div>

                              <div class="form-group row">
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
                                </div>
                              </div>
    
                   
                            
              
                          </div> 
                          </div>
                          <!------------------edit experience----------->
                          <div class="overlayeditexp" id="overlayeditexp">
                              <div class="popupeditexp" id="popupeditexp">
                                <h2>Editer ma experience <span id="closeeditexp" class="closeeditexp"> &times; </span></h2><hr>
                               
                                        
                           <div class="form-group row">
                              <label for="example-text-input" class="col-2 col-form-label">Titre de poste</label>
                              <div class="col-8">
                                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                              </div>
                            </div>
    
    
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">Entreprise</label>
                                <div class="col-8">
                                  <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                                </div>
                              </div>

                              <div class="form-group row">
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
                                </div>
                              </div>
          
                                
                  
                              </div> 
                              </div>






              <!-------------------Formation------------------------>
              <div class="overlayform" id="overlayform">
                  <div class="popupform" id="popupform">
                    <h2>Ajouter une formation <span id="closeform" class="closeform"> &times; </span></h2><hr>
                   
                           
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Titre de formation</label>
                        <div class="col-8">
                          <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                        </div>
                      </div>


                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Domaine</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                          </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-2 col-form-label">Nom de l'etablissement</label>
                            <div class="col-8">
                              <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                            </div>
                          </div>


                          <div class="form-group row">
                              <label for="exampleSelect1" class="col-2 col-form-label">Type de l'etablissement</label>
                              <div  class="col-8">
                              <select class="form-control" id="exampleSelect1">
                                <option>Sélectionner...</option>
                                <option>Université</option>
                                <option>Lycée</option>
                                <option>Ecole d'ingenieur</option>
                                <option>Ecole de commerce</option>
                                <option>Centre de formation</option>
                                <option>Autre</option>
                              </select></div>
                            </div>


                     <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">Date de debut </label>
                        <div class="col-5">
                          <input class="form-control" type="month" value="2011-08-19" id="example-date-input">
                        </div>
                      </div>

                      <div class="form-group row">
                          <label for="example-date-input" class="col-2 col-form-label">Date de fin </label>
                          <div class="col-5">
                            <input class="form-control" type="month" value="2011-08-19" id="example-date-input">
                          </div>
                        </div>
      
                  </div> 
                  </div>
                  <!------------------edit formation----------->
                  <div class="overlayeditform" id="overlayeditform">
                      <div class="popupeditform" id="popupeditform">
                        <h2>Editer ma formation <span id="closeeditform" class="closeeditform"> &times; </span></h2><hr>
                       
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
                            <div class="col-10">
                              <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
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

                              <div class="form-group row">
                                  <label for="example-url-input" class="col-2 col-form-label">Lien linkdin</label>
                                  <div class="col-10">
                                    <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
                                  </div>
                                </div>
  
                        
          
                      </div> 
                      </div>

                      <!---------------Document-------------->

                      
              <div class="overlaydoc" id="overlaydoc">
                  <div class="popupdoc" id="popupdoc">
                    <h2>Ajouter un Docuemnt <span id="closedoc" class="closedoc"> &times; </span></h2><hr>
                   
                           
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Type</label>
                        <div class="col-8">
                            <select class="form-control" id="exampleSelect1">
                                <option>Sélectionner...</option>
                                <option>Sertaficat</option>
                                <option>Diplome</option>
                                <option>Autre</option>
                                
                              </select></div>                        </div>
                      


                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Titre de document</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                          </div>
                        </div>

                        
                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Ajouter un docuement</label>
                            <input type="file" id="file" >
                            <label for="file" class="image"><span class="oi oi-cloud-upload"></span>  &nbsp; &nbsp;choisir un document</label>
                          </div>
 
                            </div>


                     
      
                  </div> 
                  
                  <!------------------edit Docuemnt----------->
                  <div class="overlayeditdoc" id="overlayeditdoc">
                      <div class="popupeditdoc" id="popupeditdoc">
                        <h2>Editer mon document <span id="closeeditdoc" class="closeeditdoc"> &times; </span></h2><hr>
                       
                      
                    <div class="form-group row">
                        <label for="example-text-input" class="col-2 col-form-label">Type</label>
                        <div class="col-8">
                            <select class="form-control" id="exampleSelect1">
                                <option>Sélectionner...</option>
                                <option>Sertaficat</option>
                                <option>Diplome</option>
                                <option>Autre</option>
                                
                              </select></div>                        </div>
                      


                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Titre de document</label>
                          <div class="col-8">
                            <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
                          </div>
                        </div>

                        
                      <div class="form-group row">
                          <label for="example-text-input" class="col-2 col-form-label">Ajouter un docuement</label>
                            <input type="file" id="file" >
                            <label for="file" class="image"><span class="oi oi-cloud-upload"></span>  &nbsp; &nbsp;choisir un document</label>
                          </div>
  
                         
    
            
            
              
               
                </div></div>
              </div>
    <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br> <br><br><br>
          

          
                   
              
                
                




<script src="{{ asset('bizPage/js/scriptcv.js')}}"></script>


@endsection