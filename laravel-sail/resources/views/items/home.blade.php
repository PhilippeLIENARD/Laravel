

@foreach ($content as $item)

    <h1>{{$item -> title}}</h1>
    <p>{{$item -> content}}</p>
    <a href="{{URL::route('item.view' , $item->slug)}}">Lien vers l'item</a>

@endforeach


