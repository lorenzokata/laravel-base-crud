@extends('welcome')
@section('title', $comic->title)

@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $comic->series }}</li>
                <li class="list-group-item">{{ $comic->sale_date }}</li>
                <li class="list-group-item">{{ $comic->type }}</li>
                <li class="list-group-item">{{ $comic->price }}</li>
            </ul>
        </div>
    </div>
</div>
    
@endsection