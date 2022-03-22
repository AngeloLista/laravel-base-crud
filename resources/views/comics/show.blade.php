@extends('layouts.main')

@section('title')
{{ $comic->title }}
@endsection

@section('content')
    <section id="comics-show">
        <div class="card-container">
            <div class="card">
                <li>{{ $comic->title }}</li>
                <li><img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></li>
                <li><strong>Description: </strong>{{$comic->description}}</li>
                <li><strong>Price: </strong>{{$comic->price}}€</li>
                <li><strong>Series: </strong>{{$comic->series}}</li>
                <li><strong>Sale Date: </strong>{{$comic->sale_date}}</li>
                <li><strong>Type: </strong>{{$comic->type}}</li>
                <li><a href="{{ route('comics.index', $comic->id) }}">Torna Indietro</a></li>
            </div>
        </div>
    </section>
@endsection