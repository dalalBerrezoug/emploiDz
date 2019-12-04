@extends('layouts.app');
@section('content')

<form action= "{{url('articles/'.$article->id)}}" method="POST">
    <input type="hidden" name="_method" value="PUT">
    {{csrf_field()}}

    <table>
        <tr><td>nom</td><td><input type="text" name="nom" value="{{$article->name}}"></td></tr>
        <tr><td>description</td><td><input type="text" name="description" value="{{$article->description}}"></td></tr>
</table>

<input type="submit" name = "" value="Modifier">
</form>
@endsection