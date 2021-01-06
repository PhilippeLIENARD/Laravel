@extends('layouts.global')

@section('content')
<h1> Edition de l'article id {{$item->id}} </h1>

<form action="{{URL::route('save.post' , $item->id)}}" method="POST">
    
    @csrf

    <div class="form-group">
        <label>Titre</label><br />
        <input type="txt" name="title" value="{{$item->title}}"><br />
    <div>

    <div class="form-group">
        <label>url</label><br />
        <input type="txt" name="slug" value="{{$item->slug}}"><br />
    <div>

    <div class="form-group">
        <label>Contenu</label><br />
        <input type="txt" name="content" value="{{$item->content}}"><br />
    <div>




    <button type="submit">Enregister</button><br />
</form>

@stop