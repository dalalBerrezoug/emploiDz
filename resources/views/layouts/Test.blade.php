<link href="{{asset('BizPage/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<div class="contener">
<div class="row">
<p style="color:red">Remplir cette formulaire</p>
<div class="col-md-12" align="center">
<form method="get" action="{{url('ajouterTest/story')}}">
<div class="col-md-6">
<input type="text" name="name">
<input type="text" name="prenom">
</div>
<div class="col-md-6">
<button type="submit" class="bnt bnt-primry">ajouter</button>
</div>
</form>
</div>
</div>
</div>