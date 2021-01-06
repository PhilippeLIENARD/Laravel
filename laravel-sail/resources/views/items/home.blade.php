@extends('layouts.global')

@if ($content instanceof \Illuminate\Pagination\LengthAwarePaginator == false)

<form action="{{URL::route('paginate.post')}}" method="POST">
    @csrf
    <input type="hidden" name="paginate" value="1">
    <button type="submit">Pagination !</button>
</form>

@elseif ($content instanceof \Illuminate\Pagination\LengthAwarePaginator)

<form action="{{URL::route('paginate.post')}}" method="POST">
    @csrf
    <input type="hidden" name="paginate" value="0">
    <button type="submit">Afficher toute la liste</button>
</form>

@endif

<a href="{{URL::route('addnew.route')}}">Ajouter un item</a>

@foreach ($content as $item)

    <h1>{{$item -> title}}</h1>
    <p>{{$item -> content}}</p>
    <a href="{{URL::route('item.view' , $item->slug)}}">Lien vers l'item</a>

@endforeach


@if ($content instanceof \Illuminate\Pagination\LengthAwarePaginator)
<!-- php artisan vendor:publish --tag=laravel-pagination -->
{{$content->links()}} 

@endif


