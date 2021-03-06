<form method="post" action="{{ route('comics.store')}}">
    @csrf

    <div class="row">

        <div class="col-12 mb-3">
            <label for="title">Title: </label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>

        <div class="col-12 mb-3">
            <div class="label">Description: </div>
            <textarea type="text" cols="173"
            rows="5"  name="description" id="description"> {{ old('description') }}</textarea>
        </div>

        <div class="col-3 mb-3">
            <label for="type">Type: </label>
            <input type="text" name="type" id="type" value="{{ old('type') }}">
        </div>

        <div class="col-3 mb-3">
            <label for="price">Price: </label>
            <input type="text" name="price" id="price" value="{{ old('price') }}">
        </div>

        <div class="col-3 mb-3">
            <label for="series">Series: </label>
            <input type="text" name="series" id="series" value="{{ old('series') }}">
        </div>

        <div class="col-3 mb-3">
            <label for="sale_date">Sale Date: </label>
            <input type="date" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
        </div>

        <div class="col-12 mb-3">
            <label for="thumb">Thumb: </label>
            <input type="text" name="thumb" id="thumb" value="{{ old('thumb') }}">
        </div>

        <div>
            <input type="submit" value="Send">
        </div>
    </div>
</form> 