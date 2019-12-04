@extends('layouts.master')
<br><br><br><br>
<div class="btn-group col-lg-12" style="margin-top: 0px;" >
        <button type="button" class="btn btn-primary" style="background-color: honeydew;color: green; border-color: honeydew;">
            <a href="rechercheavance.html"> Recherche Avancé</a></button>
        <button type="button" class="btn btn-primary" style="background-color: honeydew;color: green;border-color: honeydew;">
            <a href="rechercheparregion.html"> Recherche par Région</a></button>
        <button type="button" class="btn btn-primary" style="background-color: honeydew;color: green;border-color: honeydew;">
                <a href="rechercheparfonction.html"> Recherche par Fonction</a></button>
        <button type="button" class="btn btn-primary" style="background-color: honeydew;color: green;border-color: honeydew;">
                <a href="rechercheparmotclee.html"> Recherche par Mot clée</a></button>
    </div>
   
  

  <div class="container" style="margin-top: 100px; margin-left: 60px;margin-right: 1000px; " >
        <div class="row" style=" margin-left: 20px;margin-right: 10px; background-color: white;">
            
        <span style="font-size: 30px;">Offres d'emploi </span><br><br><br>
        <input type="search" name="recherche" placeholder="entrez un mot clé a rechercher" class=col-lg-10>
               
             
        <input type="submit" class="col-lg-2" value="Chercher">
        </div>
        <div class="row">
      <div class="col-lg-4"  style=" margin-left: 20px;margin-right: 10px; background-color: white; width: 300px;margin-top: 20px;">
        
          <span style="font-size: 30px;margin-left: 10px;">Filtrez Par<br></span><br>
          <div class="col-lg-12">
          <a  onclick="showdiv('wilaya') " href="#">+ Wilaya de Résidence</a> <br><br>
          <div class="form-check" id="wilaya"     style="display: none;margin-left: 20px;" >
              <label class="form-check-label">
                

                  <select class=form-control>
                        <option value=un>Tlemcen</option>
                        <option value=deux>Ain Timouchent</option>
                        <option value=trois>Oran</option>
                        <option value=trois>Sidi Belabbas</option>
                        <option value=trois>Alger</option>
                        <option value=trois>Setif</option>
                        <option value=trois>Annaba</option>
                        <option value=trois>Tindouf</option>
                        <option value=trois>Tebessa</option>
                        <option value=trois>Skikda</option>
                        <option value=trois>Mostaghanem</option>
                        <option value=trois>Chlef</option>
                        <option value=trois>Ghalizane</option>
                        <option value=trois>Khenchla</option>
                        <option value=trois>Tissemsilet</option>
                        <option value=trois>Blida</option>
                        <option value=trois>Bechar</option>
                        <option value=trois>Constantine</option>

                       </select>

              </label><br>
              
      
            </div></div>
            <div class="col-lg-12" >
                <a  onclick="showdiv('metier') " href="#">+ Métier</a><br> <br>
                <div class="form-check" id="metier"     style="display: none;margin-left: 20px;" >
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                      Administration,Moyens généraux
                    </label><br>
                    <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="origine" value="web">
                            Assistant,secrétariat
                          </label><br>

                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" name="origine" value="web">
                              Vente,Télévente.Commercial 
                            </label><br>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="origine" value="web">
                                Informatique,Systeme d'information,résaux
                              </label><br>
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="origine" value="web">
                                  Hotellerie,Tourisme.. 
                                </label><br>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="origine" value="web">
                                    Education,Enseignement
                                  </label><br>
                                  <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="origine" value="web">
                                      Juridique,Fiscale..
                                    </label><br>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="origine" value="web">
                                        Ingenierie,Etudes,Projet 
                                      </label><br>
                                      <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="origine" value="web">
                                          Ressource Humain,Personnel 
                                        </label><br>
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="origine" value="web">
                                            Architecture
                                          </label><br>
            
                  </div></div>
                  <div class="col-lg-12">
                      <a  onclick="showdiv('niveau') " href="#">+ Niveau de Formation</a> <br><br>
                      <div class="form-check" id="niveau"     style="display: none;margin-left: 20px;" >
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                            Niveau secondaire
                          </label><br>
                          <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                              Niveau terminal 
                            </label><br>
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                                Bac+2 
                              </label><br>
                              <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                                  Licence,Bac+3 
                                </label><br>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                                    Master1,Bac+4 
                                  </label><br>
                                  <label class="form-check-label">
                                      <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                                      Master2,Bac+5 
                                    </label><br>
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                                        Doctorat
                                      </label><br>
                                      <label class="form-check-label">
                                          <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                                          Formation Professionnelle 
                                        </label><br>
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="origine" value="ami" checked>
                                            Universitaire sans diplome 
                                          </label><br>
                                           
                            

                        
                  
                        </div></div>    <br><br>
         <input type="submit" value="Appliquer" style="background-color: #18d26e;color: white; border-bottom-left-radius: 10px;
         border-bottom-right-radius: 10px;
         border-top-left-radius: 10px;
         border-top-right-radius: 10px;
         margin-left: 50px;">
      </div><br><br><br><br>

      <div  clas="col-lg-8" >
        <div class="row" style=" background-color: white; margin-top: 20px; width: 700px;margin-left: 10px;">
          <span style="font-size: 30px;margin-left: 10px;">Résultats de Filtrage<br></span>
       </div>

       <div class="row" style=" background-color: white; margin-top: 5px; width: 700px;margin-left: 10px;">
          <div class="col-lg-3"><img src=bizPage/img/icon/Services.png></div>
          <div class="col-lg-6"><h5 style="margin-top: 5px;"><h5>Informaticien</h5>
            <h6> Tlemcen,Algerie &nbsp;&nbsp;&nbsp;&nbsp; 24 Octobre</h6></div>
          <div class="col-lg-3" ><input type="button" value="Détails" style="
         
              background: #18d26e;
              color: #fff;
              width: 100px;
              height: 44px;
              text-align: center;
              line-height: 1;
              font-size: 16px;
              border-radius: 10%;
              right: 15px;
              bottom: 15px;
              margin-top: 20px;
            cursor:pointer;

  
              
              "></a></div>
       </div>
       <div class="row" style=" background-color: white; margin-top: 5px; width: 700px;margin-left: 10px;">
          <div class="col-lg-3"><img src=bizPage/img/icon/e1.png></div>
          <div class="col-lg-6"><h5 style="margin-top: 5px;"><h5>Testeur/Ingenieur</h5>
            <h6> Alger,Algerie &nbsp;&nbsp;&nbsp;&nbsp; Hier</h6></div>
          <div class="col-lg-3" ><a href="offres.html"><input type="button" value="Détails" style="
         
              background: #18d26e;
              color: #fff;
              width: 100px;
              height: 44px;
              text-align: center;
              line-height: 1;
              font-size: 16px;
              border-radius: 10%;
              right: 15px;
              bottom: 15px;
              margin-top: 20px;
            cursor:pointer;

              
  
              
              "></a></div>
       </div>

</div></div>
            </div>




@section('content')