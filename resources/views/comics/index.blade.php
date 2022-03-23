@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <section id="comics-index" class="d-flex flex-wrap justify-content-center">
        @foreach ($comics as $comic)
            <div class="card p-4 m-5">
                <div class="row">
                    <div class="col-9">
                        <h3>{{$comic->title}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 card-infos-container">
                        {{-- Infos --}}
                            <div class="card-infos">
                                <p><strong>Price: </strong>
                                    <span class="text-muted">{{$comic->price}}€</span>
                                </p>
                                <p><strong>Sale Date: </strong>
                                    <span class="text-muted">{{$comic->sale_date}}</span>
                                </p>
                                <p><strong>Type: </strong>
                                    <span class="text-muted">{{$comic->type}}</span>
                                </p>
                            </div>
                            {{-- Scopri di più --}}
                            <div class="buttons">
                                <div class="btn-container"><a class="discover-btn"href="{{ route('comics.show', $comic->id) }}">Scopri di più</a></div>
                                {{-- Modifica --}}
                                <div class="btn-container me-2"><a class="discover-btn"href="{{ route('comics.edit', $comic->id) }}">Modifica</a></div>
                            </div>
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