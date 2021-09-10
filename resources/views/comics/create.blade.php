@extends('welcome')

@section('content')
<div class="container p-3">
    <h2>Inserimento fumetto</h2>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="titolo" class="form-label">Titolo</label>
          <input type="text" name="title" class="form-control" id="titolo">
        </div>
        <div class="mb-3">
          <label for="img" class="form-label">Immagine</label>
          <input type="text" name="thumb" class="form-control" id="img">
        </div>
        <div class="mb-3">
          <label for="sale-date" class="form-label">Data di Uscita</label>
          <input type="text" name="sale_date" class="form-control" id="sale-date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" name="price" class="form-control" id="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" name="series" class="form-control" id="series">
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" name="type" class="form-control" id="type">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
      </form>
</div>
@endsection