@extends('layouts.main')

@section('content')
    <div>
        @foreach ($comics as $comic)
            <ul>
                <li><strong>Title: </strong>{{$comic->title}}</li>
                <li><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></li>
                <li><strong>Price: </strong>{{$comic->price}}</li>
                <li><strong>Series: </strong>{{$comic->series}}</li>
                <li><strong>Sale Date: </strong>{{$comic->sale_date}}</li>
                <li><strong>Type: </strong>{{$comic->type}}</li>
                <li><a href="{{ route('comics.show', $comic->id) }}">Scopri di più</a></li>
            </ul>
        @endforeach
    </div>
@endsection