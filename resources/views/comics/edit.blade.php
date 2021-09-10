@extends('welcome')

@section('content')
<div class="container p-3">
    <h2>Modifica fumetto {{ $comic->id }}</h2>
    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="tit" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" value="{{ $comic->title }}" id="tit">
        </div>
        <div class="mb-3">
          <label for="img" class="form-label">Immagine</label>
          <input type="text" name="thumb" class="form-control" value="{{ $comic->thumb }}" id="img">
        </div>
        <div class="mb-3">
          <label for="img" class="form-label">Data di Uscita</label>
          <input type="text" name="sale_date" class="form-control" value="{{ $comic->sale_date }}" id="img">
        </div>
        <div class="mb-3">
            <label for="cottura" class="form-label">Prezzo</label>
            <input type="text" name="price" class="form-control" value="{{ $comic->price }}" id="cottura">
        </div>
        <div class="mb-3">
            <label for="peso" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" value="{{ $comic->series }}" id="peso">
        </div>
        
        <div class="mb-3">
            <label for="desc" class="form-label">Tipo</label>
            <input type="text" name="type" class="form-control" value="{{ $comic->type }}" id="peso">
        </div>

        <div class="mb-3">
            <label for="desc" class="form-label">Descrizione</label>
            <textarea name="description" value="{{ $comic->description }}" id="desc" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Modifica</button>
      </form>
</div>
@endsection