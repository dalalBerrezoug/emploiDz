@extends('layouts.app');
@section('content')

<form action= "{{url('articles')}}" method="POST">
    {{csrf_field()}}

    <table>
        <tr><td>nom</td><td><input type="text" name="nom"></td></tr>
        <tr><td>description</td><td><input type="text" name="description"></td></tr>
</table>

<input type="submit" name = "" value="Enregister">
</form>
@endsection