<!DOCTYPE html>
<html>
<head></head>
<body>
<h1> liste des articles</h1>
<table border=1>
@foreach($articles as $article)
    <tr>
        <td>{{$article->id}}</td><td>
        <td>{{$article->name}}</td>
        <td>{{$article->description}}</td>
        <td><a href="{{url('articles/'.$article->id.'/edit')}}">modifier</a></td>
        <td><form action="{{url('articles/'.$article->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                <button type="submit">supprimer</button></form>           
    
    </td>
        <td><a href="">ajouter</a></td>
       </tr>
       @endforeach
       </table> 
       </body></html>