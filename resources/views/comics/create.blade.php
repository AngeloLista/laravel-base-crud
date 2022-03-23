@extends('layouts.main')

@section('title', 'Create a New Comic')

@section('content')
<h1 class="mb-3">Create a new Comic</h1>
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