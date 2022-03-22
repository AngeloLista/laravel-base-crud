
@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
    <section id="home" class="d-flex flex-column align-items-center justify-content-center">
        <h1>Benvenuto!</h1>
        <a href="{{ route('comics.index') }}">Accedi alla lista dei Fumetti</a>
    </section>
@endsection