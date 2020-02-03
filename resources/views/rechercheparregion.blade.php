@extends('layouts.master')
@section('content')

<div class="container" style="margin-top: 200px; margin-left: 100px;margin-right: 1000px; " >
    <div class="row row col-lg-9" style=" margin-left: 20px;margin-right: 300px; background-color: white;">
        
<span style="font-size: 30px;">Offres d'emploi par Région</span><br><br><br>
    </div>
    
    <div style="margin-top: 5px; margin-left: 20px;margin-right: 300px; background-color: white;" class="row col-lg-9">

      <table class="table">
        <tr>
          <td><a href="{{url('liste/adrar')}}">1- Adrar</a></td>
          <td><a href="{{url('liste/chlef')}}">2- Chlef</a></td>
          <td><a href="{{url('liste/laghouat')}}">3- Laghouat</a></td>
        </tr>
        <tr>
            <td><a href="{{url('liste/oum el bouaghi')}}">4- Oum el Bouaghi</a></td>
            <td><a href="{{url('liste/batna')}}">5- Batna</a></td>
            <td><a href="{{url('liste/bejaia')}}">6- Bejaia</a></td>
          </tr>
          <tr>
              <td><a href="{{url('liste/biskra')}}">7- Biskra</a></td>
              <td><a href="{{url('liste/bechar')}}">8- Bechar</a></td>
              <td><a href="{{url('liste/blida')}}">9- Blida</a></td>
            </tr>
            <tr>
                <td><a href="{{url('liste/bouira')}}"> 10- Bouira</a></td>
                <td><a href="{{url('liste/tamanrasset')}}">11- Tamanrasset</a></td>
                <td><a href="{{url('liste/tebessa')}}">12- Tebessa</a></td>
              </tr>
              <tr>
                  <td><a href="{{url('liste/tlemcen')}}">13- Tlemcen</a></td>
                  <td><a href="{{url('liste/tiaret')}}">14- Tiaret</a></td>
                  <td><a href="{{url('liste/tizi ouzou')}}">15- Tizi Ouzou</a></td>
                </tr>
                <tr>
                    <td><a href="{{url('liste/alger')}}">16- Alger</td>
                    <td><a href="{{url('liste/djelfa')}}">17- Djelfa</td>
                    <td><a href="{{url('liste/jijel')}}">18- Jijel</td>
                  </tr>
                  <tr>
                      <td><a href="{{url('liste/setif')}}">19- Setif</a></td>
                      <td><a href="{{url('liste/saida')}}">20- Saida</a></td>
                      <td><a href="{{url('liste/skikda')}}">21- Skikda</a></td>
                    </tr>
                    <tr>
                        <td><a href="{{url('liste/sidi bl abbas')}}">22- Sidi Bel Abbes</a></td>
                        <td><a href="{{url('liste/annaba')}}">23- Annaba</a></td>
                        <td><a href="{{url('liste/guelma')}}">24- Guelma</a></td>
                      </tr>
                      <tr>
                          <td><a href="{{url('liste/constantine')}}">25- Constantine</a></td>
                          <td><a href="{{url('liste/medea')}}">26- Medea</a></td>
                          <td><a href="{{url('liste/mostaganem')}}">27- Mostaganem</a></td>
                        </tr>
                        <tr>
                            <td><a href="{{url('liste/msila')}}">28- Msila</a></td>
                            <td><a href="{{url('liste/mascara')}}">29- Mascara</a></td>
                            <td><a href="{{url('liste/ourgla')}}">30- Ouargla</a></td>
                          </tr>
                          <tr>
                              <td><a href="{{url('liste/oran')}}">31- Oran</a></td>
                              <td><a href="{{url('liste/el bayadh')}}">32- El Bayadh</a></td>
                              <td><a href="{{url('liste/illiza')}}">33- Illizi</a></td>
                            </tr>
                            <tr>
                                <td><a href="{{url('liste/Bordj Bou Arreridj')}}">34- Bordj Bou Arreridj</a></td>
                                <td><a href="{{url('liste/boumerdes')}}">35- Boumerdes</a></td>
                                <td><a href="{{url('liste/el tarf')}}">36- El tarf</a></td>
                              </tr>
                              <tr>
                                  <td><a href="{{url('liste/tindouf')}}">37- Tindouf</a></td>
                                  <td><a href="{{url('liste/tissemsilt')}}">38- Tissemsilt</a></td>
                                  <td><a href="{{url('liste/el oued')}}">39- El Oued</a></td>
                                </tr>
                                <tr>
                                    <td><a href="{{url('liste/khenchla')}}">40- Khenchela</a></td>
                                    <td><a href="{{url('liste/souk ahras')}}">41- Souk Ahras</a></td>
                                    <td><a href="{{url('liste/tipaza')}}">42- Tipaza</a></td>
                                  </tr>
                                  <tr>
                                      <td><a href="{{url('liste/mila')}}">43- Mila</a></td>
                                      <td><a href="{{url('liste/ain defla')}}">44- Ain Defla</a></td>
                                      <td><a href="{{url('liste/naama')}}">45- Naama</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('liste/ain temouchent')}}">46- Ain Temouchent</a></td>
                                        <td><a href="{{url('liste/ghardaia')}}">47- Ghardaia</a></td>
                                        <td><a href="{{url('liste/relizane')}}">48- Relizane</a></td>
                                      </tr>
       
      </table>
        
           
        </div>
        </div>

        @endsection