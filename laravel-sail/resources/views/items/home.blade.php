@extends('layouts.global')
@section('content')

@if ($content instanceof \Illuminate\Pagination\LengthAwarePaginator == false)

<form action="{{URL::route('paginate.route')}}" method="POST">
    @csrf
    <input type="hidden" name="paginate" value="1">
    <button type="submit" class="btn btn-primary">Pagination !</button>
</form>

@elseif ($content instanceof \Illuminate\Pagination\LengthAwarePaginator)

<form action="{{URL::route('paginate.route')}}" method="POST">
    @csrf
    <input type="hidden" name="paginate" value="0">
    <button type="submit" class="btn btn-primary">Afficher toute la liste</button>
</form>

@endif
<br />
<a href="{{URL::route('addnew.route')}}" style="border: 1px solid #cbcbcb;padding: 10px;"> Ajouter une BD</a>
<br /><br />
@foreach ($content as $item)

    <h1>{{$item -> title}}</h1>
    <p>{{$item -> content}}</p>
    <a href="{{URL::route('item.route' , $item->slug)}}">Lien vers la BD</a>
    <hr />

@endforeach


@if ($content instanceof \Illuminate\Pagination\LengthAwarePaginator)
<!-- php artisan vendor:publish --tag=laravel-pagination -->
{{$content->links()}} 

@endif

@stop


