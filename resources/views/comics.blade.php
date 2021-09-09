@extends('welcome')
@section('title', 'Comics')

@section('content')
    @foreach ($comics as $item)
        <div class="card" style="width: 18rem;">
            <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    @endforeach
@endsection