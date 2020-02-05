@extends('layouts.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

 <body>
 <br><br><br><br><br><br>
  <div class="container">    
     <br />
     <h1 align="center" class="text-success">Recherche Avancée</h1>
     <br /><h3 align="center" >Séléctionnez vos critères et cherchez un offre</h3><br />
     <br />
          
            <div class="row">
                <div class="col-md-4"> </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_domaine" id="filter_domaine" class="form-control" required>
                        <option value="">Domaine</option>
                            @foreach($domaine as $domaine)

                            <option value="{{ $domaine->domaine }}">{{ $domaine->domaine }}</option>

                            @endforeach
                        </select>
                    </div>



                    <div class="form-group">
                        <select name="filter_lieuTrav" id="filter_lieuTrav" class="form-control" required>
                            <option value="">Lieu de travail</option>
                            @foreach($lieuTrav as $lieuTrav)

                            <option value="{{ $lieuTrav->lieuTrav }}">{{ $lieuTrav->lieuTrav }}</option>

                            @endforeach
                        </select>
                    </div>



                  <div class="form-group">
                        <select name="filter_diplome" id="filter_diplome" class="form-control" required>
                            <option value="">Diplome</option>
                            @foreach($diplome as $diplome)

                            <option value="{{ $diplome->diplome }}">{{ $diplome->diplome }}</option>

                            @endforeach
                        </select>
                    </div>


                    
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filtrer</button>

                        <button type="button" name="reset" id="reset" class="btn btn-default">Annuler</button>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
            <br /><!-- {
                    data:'description',
                    name:'description'
                },-->
               
                
                <div clas="row">
                <div class='col-lg-11'>
   <div class="table-responsive ">
    <table id="customer_data" class="table table-bordered table-striped col-md-12">
                    <thead>
                        <tr style="width: 200px;">
                           <th style="width: 300px;">Entreprise</th>
                            <th style="width: 200px;">domaine</th>
                            <th style="width: 200px;">diplome</th>
                            <th style="width: 200px;">lieu de travail</th>
                            <th style="width: 200px;">type</th>
                           <th></th>
                        </tr>
                    </thead>
                </table>
   </div></div> </div>
            <br />
            <br />
  </div>
 </body>


<script>
$(document).ready(function(){
 

    fill_datatable();
    
    

    function fill_datatable(filter_domaine = '', filter_lieuTrav = '', filter_diplome='')
    {
     
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            
            
            
            ajax:{
                url: "{{ route('rechercheavance.index') }}",
                data:{filter_domaine:filter_domaine, filter_lieuTrav:filter_lieuTrav, filter_diplome:filter_diplome}
               
            },
            
            columns: [
              {
                    data:'Nom_Rec',
                    name:'Nom_Rec',
                    
                },  
             
                {
                    data:'domaine',
                    name:'domaine'
                },
                {
                    data:'diplome',
                    name:'diplome'
                },
                {
                    data:'lieuTrav',
                    name:'lieuTrav'
                },
                {
                    data:'type',
                    name:'type'
                },
               
                
                {
                   
                    defaultContent: "<button class='btn btn-success btn-lg mb-2' style='color:white;'><a href='detail/8' style='color:white;'>détail</a></button>"
                },
               
                
                
                
            ]
           
        });

/*
        $('#customer_data tbody').on( 'click', 'button', function () {
        var d = table.row( $(this).parents('tr') ).data();
        alert( d[0] +"'s salary is: " );
      
    } );*/
    }
    
    
    

    $('#filter').click(function(){
        var filter_domaine = $('#filter_domaine').val();
        var filter_lieuTrav = $('#filter_lieuTrav').val();
        var filter_diplome = $('#filter_diplome').val();

        if(filter_domaine != '' ||  filter_lieuTrav != '' || filter_diplome != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_domaine, filter_lieuTrav, filter_diplome);
        }
        else
        {
            alert('Select Both filter option');
        }
    });

    $('#reset').click(function(){
        $('#filter_domaine').val('');
        $('#filter_lieuTrav').val('');
        $('#filter_diplome').val('');
        $('#customer_data').DataTable().destroy();
        fill_datatable();
    });
    
});
</script>





@section('content')