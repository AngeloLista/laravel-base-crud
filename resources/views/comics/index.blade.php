@extends('layouts.main')

@section('title', 'Comics')

@section('content')

    @include('includes.session_message')

    <section id="comics-index" class="d-flex flex-wrap justify-content-center">

        @foreach ($comics as $comic)
            <div class="card p-4 m-5">
                <div class="row">
                    <div class="col-9">
                        <h3>{{$comic->title}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 card-infos-container">
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
                            <div class="buttons">
                                <div class="row">
                                    <div class="col-6 d-flex flex-column justify-content-end">
                                        {{-- Scopri di più --}}
                                        <div class="btn-container"><a class="discover-btn orange-btn"href="{{ route('comics.show', $comic->id) }}">Scopri di più</a></div>
                                    </div>
                                    <div class="col-6 d-flex flex-column align-items-end">
                                        {{-- Elimina --}}
                                        <div class="btn-container p-0">
                                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="delete-form" data-name="{{ $comic->title }}">
                                                @csrf
                                                @method('DELETE')
                                                <button class="discover-btn red-btn form-btn mb-1" type="submit">Elimina</button>
                                            </form>
                                        </div>
                                        {{-- Modifica --}}
                                        <div class="btn-container"><a class="discover-btn green-btn" href="{{ route('comics.edit', $comic->id) }}">Modifica</a></div>
                                    </div>
                                </div>
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

@section('additional-scripts')
    <script>
        const deleteForms = document.querySelectorAll('.delete-form');
        deleteForms.forEach(form => {
            const title = form.getAttribute('data-name');
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const accept = confirm(`Are you sure you want to delete ${title}?`);
                if (accept) e.target.submit();
            });
        })
    </script>
@endsection
