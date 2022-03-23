@extends('layouts.main')

@section('content')
<section id="edit-comic">
    <h1 class="mb-5">Modifica {{ $comic->title }}</h1>
    <form method="post" action="{{ route('comics.update', $comic->id)}}">
        @method('PUT')
        @csrf
    
        <div class="row">
    
            <div class="col-12 mb-3">
                <label for="title">Title: </label>
                <input type="text" name="title" id="title" value="{{ $comic->title }}">
            </div>
    
            <div class="col-12 mb-3">
                <div class="label">Description: </div>
                <textarea class="p-2" type="text" cols="173"
                rows="5"  name="description" id="description">{{ $comic->description }}</textarea>
            </div>
    
            <div class="col-3 mb-3">
                <label for="type">Type: </label>
                <input type="text" name="type" id="type" value="{{ $comic->type }}">
            </div>
    
            <div class="col-3 mb-3">
                <label for="price">Price: </label>
                <input type="text" name="price" id="price" value="{{ $comic->price }}">
            </div>
    
            <div class="col-3 mb-3">
                <label for="series">Series: </label>
                <input type="text" name="series" id="series" value="{{ $comic->series }}">
            </div>
    
            <div class="col-3 mb-3">
                <label for="sale_date">Sale Date: </label>
                <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>
    
            <div class="col-12 mb-3">
                <label for="thumb">Thumb: </label>
                <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            </div>
    
            <div>
                <input type="submit" value="Send">
            </div>
        </div>
    </form>
</section>
@endsection