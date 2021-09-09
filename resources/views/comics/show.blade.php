@extends('welcome')
@section('title', $item->title)

@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">{{ $item->description }}</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">{{ $item->series }}</li>
                <li class="list-group-item">{{ $item->sale_date }}</li>
                <li class="list-group-item">{{ $item->type }}</li>
                <li class="list-group-item">{{ $item->price }}</li>
            </ul>
        </div>
    </div>
</div>
    
@endsection