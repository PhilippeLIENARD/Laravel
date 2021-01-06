@extends('layouts.global')
@section('content')
<h1> Ajouter une BD </h1>

<form action="{{URL::route('postnew.route')}}" method="POST">
    
    @csrf

    <div class="form-group">
        <label>Titre</label><br />
        <input type="txt" name="title" value=""><br />
    <div>

    <div class="form-group">
        <label>url</label><br />
        <input type="txt" name="slug" value=""><br />
    <div>

    <div class="form-group">
        <label>Contenu</label><br />
        <input type="txt" name="content" value=""><br />
    <div>


    <br />

    <button type="submit" class="btn btn-primary">Ajouter</button><br />
</form>
@stop