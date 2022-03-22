@extends('layouts.main')

@section('title')
{{ $comic->title }}
@endsection

@section('content')
    <section id="comics-show" class="d-flex flex-wrap justify-content-center">
        <div class="card p-4 m-5">
            <div class="row">
                <div class="col-9">
                    <h3></strong>{{$comic->title}}</h3>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    {{-- Scopri di più --}}
                    <div class="btn-container"><a class="discover-btn"href="{{ route('comics.index', $comic->id) }}">Torna alla lista</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 card-infos-container">
                    {{-- Infos --}}
                        <div class="card-infos">
                            <p><strong>Description: </strong>{{$comic->description}}€</p>
                            <p><strong>Price: </strong>{{$comic->price}}€</p>
                            <p><strong>Sale Date: </strong>{{$comic->sale_date}}</p>
                            <p><strong>Type: </strong>{{$comic->type}}</p>
                        </div>
                    </div>
                <div class="col-6">
                    {{-- Titolo --}}
                    <div class="card-img-container mt-3">
                        <div class="img-pod">
                            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection