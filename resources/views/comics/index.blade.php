@extends('welcome')
@section('title', 'Comics')

@section('content')
<div class="container">
    <div class="row row-cols-3 g-3 p-3">
        @foreach ($comics as $item)
        <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $item->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    {{-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $item->series }}</li>
                        <li class="list-group-item">{{ $item->sale_date }}</li>
                        <li class="list-group-item">{{ $item->type }}</li>
                        <li class="list-group-item">{{ $item->price }}</li>
                        </ul> --}}
                    <a href="{{ route('comics.show', $item->id) }}" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
    
@endsection