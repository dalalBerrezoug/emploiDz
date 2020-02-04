@extends('layouts.master')
@section('content')

<div class="container" style="margin-top: 200px; margin-left: 100px;margin-right: 1000px; " >
<div class="row col-lg-9" style=" margin-left: 20px;margin-right: 300px; background-color: white;">
    
<span style="font-size: 30px;">Offres d'emploi par Fonction</span><br><br><br>
</div>

<div style="margin-top: 5px; margin-left: 20px;margin-right: 300px; background-color: white;" class="row col-lg-9">
    
        <div class="col-lg-3 col-md-6"> <img src="bizPage/img/icon/388.png"> </div>
        <div class="col-lg-9 col-md-6" style="align-content: center;"> <span style="font-size: 20px;"> Administration, Finance, Comptabilité & Juridique</span>
           <p><a href="{{url('liste/administration')}}">Administration</a>, 
            <a href="{{url('liste/moyens généraux Assistanat')}}">Moyens généraux Assistanat</a>
             , <a href="{{url('liste/secrétariat Comptabilité')}}">secrétariat Comptabilité</a>
             ,<a href="{{url('liste/architecture')}}"> Finance, Métiers Banque et assurances Juridique</a>
             ,<a href="{{url('liste/fiscal')}}"> Fiscal</a>,
             <a href="{{url('liste/audit')}}"> Audit</a></p>
        </div>
        <br><br><br></div>
        <div style=" margin-left: 20px;margin-right: 300px; background-color: white;" class="row col-lg-9">
    
        <div class="col-lg-3 col-md-6"> <img src="bizPage/img/icon/356.png"> </div>
         <div class="col-lg-9 col-md-6" style="align-content: center;"> <span style="font-size: 20px;">Commercial, Marketing, Communication & Création</span>
         <p><a href ="{{url('liste/vente')}}">Vente</a>,
           <a href ="{{url('liste/télévente')}}">Télévente</a>, 
           <a href="{{url('liste/assistanat Commercial')}}">Assistanat Commercial</a>,
           <a href="{{url('liste/technico Commercial')}}"> Technico Commercial</a>,
              <a href="{{url('liste/service Client Responsable Commercial')}}">  Service Client Responsable Commercial</a>,
                  <a href="{{url('liste/grands comptes Création')}}">   Grands comptes Création</a>, 
                      <a href="{{url('liste/design Marketing')}}">   Design Marketing</a>,
                          <a href="{{url('liste/communication Journalisme')}}">    Communication Journalisme</a>,
                              <a href="{{url('liste/médias')}}">     Médias</a>, 
                                  <a href="{{url('liste/traduction')}}">    Traduction</a></p>
        
        </div>
        </div>
        <div style=" margin-left: 20px;margin-right: 300px; background-color: white;" class="row col-lg-9">
    
         <div class="col-lg-3 col-md-6"> <img src="bizPage/img/icon/364.png"> </div>
         <div class="col-lg-9 col-md-6" style="align-content: center;"> <span style="font-size: 20px;"> 
                Informatique, Télécommunication & Réseaux</span>
              <p>
                  <a href="{{url('listefonction/informatique')}}">   Informatique</a>,
                      <a href="{{url('liste/systèmes information')}}">   Systèmes d'information</a>,
                          <a href="{{url('liste/internet Télécommunication')}}">    Internet Télécommunication</a>,
                              <a href="{{url('liste/réseaux')}}">    Réseaux</a>
              </p></div>
          </div>
         <div style=" margin-left: 20px;margin-right: 300px; background-color: white;" class="row col-lg-9">
  
            <div class="col-lg-3 col-md-6"> <img src="bizPage/img/icon/367.png"> </div>
                                <div class="col-lg-9 col-md-6" style="align-content: center;"> <span style="font-size: 20px;">Ingénierie, Industrie, Construction</span>
                                <p>
                                    <a href="{{url('liste/chantier')}}"> Chantier</a>,
                                        <a href="{{url('liste/métiers BTP')}}"> Métiers BTP</a>,
                                            <a href="{{url('liste/architecture')}}">Architecture Ingénierie</a>,
                                                <a href="{{url('liste/etudes')}}">  Etudes</a>,
                                                    <a href="{{url('liste/projet')}}">  Projet</a>,
                                                        <a href="{{url('liste/R&D Logistique')}}">   R&D Logistique</a>,
                                                            <a href="{{url('liste/achat')}}">   Achat</a>, 
                                                                <a href="{{url('liste/stock')}}">    Stock</a>,
                                                                    <a href="{{url('liste/transport Production')}}">   Transport Production</a>, 
                                                                        <a href="{{url('liste/méthode')}}">    méthode</a>,
                                                                            <a href="{{url('liste/industrie Maintenance')}}">    industrie Maintenance</a>,
                                                                                <a href="{{url('liste/ Entretien Qualité')}}">     Entretien Qualité</a>,
                                                                                    <a href="{{url('liste/sécurité')}}">   Sécurité</a>,
                                                                                        <a href="{{url('liste/environnement')}}"> Environnement</a>
                                   </p>
                                </div>
                                </div>

         <div style=" margin-left: 20px;margin-right: 300px; background-color: white;" class="row col-lg-9">
  
        <div class="col-lg-3 col-md-6"> <img src="bizPage/img/icon/375.png"> </div>
        <div class="col-lg-9 col-md-6" style="align-content: center;"> <span style="font-size: 20px;">Santé, Médical, Pharmaceutique, Délégué médical</span>
          <a href="{{url('liste/santé')}}"> Santé</a>, 
              <a href="{{url('liste/médical')}}"> Médical</a>,
                  <a href="{{url('liste/pharmacie')}}"> Pharmacie</a><br><br><br>
        </div>
        </div>
    </div>


@endsection