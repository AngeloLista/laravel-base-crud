@extends('layouts.main')

@section('title')
{{ $comic->title }}
@endsection

@section('content')
    <section id="comics-show" class="d-flex flex-wrap justify-content-center">
        <div class="card p-4 m-3">
            <div class="row">
                <div class="col-7">
                    <h3></strong>{{$comic->title}}</h3>
                </div>
                <div class="col-5 d-flex justify-content-end">
                    {{-- Elimina --}}
                    <div class="btn-container p-0 me-2">
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="discover-btn red-btn form-btn" type="submit">Elimina</button>
                        </form>
                    </div>
                    {{-- Scopri di più --}}
                    <div class="btn-container me-2"><a class="discover-btn green-btn" href="{{ route('comics.edit', $comic->id) }}">Modifica</a></div>
                    {{-- Modifica --}}
                    <div class="btn-container"><a class="discover-btn orange-btn" href="{{ route('comics.index', $comic->id) }}">Torna alla lista</a></div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 card-infos-container">
                    {{-- Infos --}}
                        <div class="card-infos">
                            <p><span class="text-muted">{{$comic->description}}</span></p>
                            <p><strong>Price: </strong>
                                <span class="text-muted">{{$comic->price}}€</span></p>
                            <p><strong>Sale Date: </strong>
                                <span class="text-muted">{{$comic->sale_date}}</span></p>
                            <p><strong>Type: </strong>
                                <span class="text-muted">{{$comic->type}}</span></p>
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