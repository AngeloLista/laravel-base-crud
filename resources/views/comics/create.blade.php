@extends('layouts.main')

@section('content')
    <form method="post" action="{{ route('comics.store')}}">
        @csrf

        <label for="title">Title: </label>
        <input type="text" name="title" id="title">

        <label for="description">Description: </label>
        <input type="text" cols="40" 
        rows="5"  name="description" id="description">

        <label for="thumb">Thumb: </label>
        <input type="text" name="thumb" id="thumb">

        <label for="price">Price: </label>
        <input type="text" name="price" id="price">

        <label for="series">Series: </label>
        <input type="text" name="series" id="series">

        <label for="sale_date">Sale Date: </label>
        <input type="date" name="sale_date" id="sale_date">

        <label for="type">Type: </label>
        <input type="text" name="type" id="type">
        <input type="submit" value="Send">
@endsection