@extends('layouts.global')

@section('content')

<a href="{{URL::route('home.route')}}">Retour</a>

<h1>{{$item -> title}}</h1>

<p>{{$item -> content}}</p>

<p>id de l'item : {{$item ->id}}</p>

<p>url de l'item : {{$item ->slug}}</p>

<a href="{{URL::route('edit.route' , $item->id)}}"><strong>Editer</strong></a>

<br /><br />

<form action="{{URL::route('delete.route' , $item ->id)}}" method ="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Supprimer</button>
</form>

@stop