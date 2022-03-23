@extends('layouts.main')

@section('title', 'Create a New Comic')

@section('content')
<h1 class="mb-3">Crea un nuovo fumetto</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@include('includes.comics.form')
@endsection