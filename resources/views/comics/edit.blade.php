@extends('layouts.main')

@section('content')

<section id="edit-comic">
    <h1 class="mb-3">Edit {{ $comic->title }}</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('comics.update', $comic->id)}}">
        @method('PUT')
        @csrf
    
        <div class="row">
    
            <div class="col-12 mb-3">
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}">
            </div>
    
            <div class="col-12 mb-3">
                <div class="label">Description: </div>
                <textarea class="p-2" type="text" cols="173"
                rows="5"  name="description" id="description">{{ old('description', $comic->description) }}</textarea>
            </div>
    
            <div class="col-3 mb-3">
                <label for="type">Type: </label>
                <input type="text" name="type" id="type" value="{{ old('type', $comic->type) }}">
            </div>
    
            <div class="col-3 mb-3">
                <label for="price">Price: </label>
                <input type="text" name="price" id="price" value="{{ old('price', $comic->price) }}">
            </div>
    
            <div class="col-3 mb-3">
                <label for="series">Series: </label>
                <input type="text" name="series" id="series" value="{{ old('series', $comic->series) }}">
            </div>
    
            <div class="col-3 mb-3">
                <label for="sale_date">Sale Date: </label>
                <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
    
            <div class="col-12 mb-3">
                <label for="thumb">Thumb: </label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>
    
            <div>
                <input type="submit" value="Send">
            </div>
        </div>
    </form>
</section>
@endsection