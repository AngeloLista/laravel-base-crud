
@extends('layouts.main')

@section('content')
    <h1>Benvenuto!</h1>
    <a href="{{ route('comics.index') }}">Accedi alla lista dei Fumetti</a>
@endsection