@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <section id="comics-index" class="d-flex flex-wrap justify-content-center">
        @foreach ($comics as $comic)
            <div class="card p-4 m-5">
                <div class="row">
                    <div class="col-9">
                        <h3>Title: </strong>{{$comic->title}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 card-infos-container">
                        {{-- Infos --}}
                            <div class="card-infos">
                                <p><strong>Price: </strong>{{$comic->price}}€</p>
                                <p><strong>Sale Date: </strong>{{$comic->sale_date}}</p>
                                <p><strong>Type: </strong>{{$comic->type}}</p>
                            </div>
                            {{-- Scopri di più --}}
                            <div class="btn-container"><a class="discover-btn"href="{{ route('comics.show', $comic->id) }}">Scopri di più</a></div>
                    </div>
                    <div class="col-6">
                        {{-- Titolo --}}
                        <div class="card-img-container">
                            <div class="img-pod">
                                <a href="{{ route('comics.show', $comic->id) }}"><img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection