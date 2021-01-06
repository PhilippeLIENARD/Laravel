

<a href="{{URL::route('home.view')}}">Retour</a>

<h1>{{$item -> title}}</h1>

<p>{{$item -> content}}</p>

<p>id de l'item : {{$item ->id}}</p>

<p>url de l'item : {{$item ->slug}}</p>

<a href="{{URL::route('edit.view' , $item->id)}}">éditer l'item</a>

<form action="{{URL::route('delete.item' , $item ->id)}}" method ="POST">
    @csrf
    <button type="submit">supprimer</button>
</form>