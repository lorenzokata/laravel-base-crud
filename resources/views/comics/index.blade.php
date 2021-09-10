@extends('welcome')
@section('title', 'Comics')

@section('content')

<p>
    {{-- sssione update --}}
    @if (session('edit'))
    <div class="alert alert-success">
      {{ session('edit') }}
    </div>
    @endif

    {{-- sessione delete --}}
    @if (session('delete'))
    <div class="alert alert-danger">
      {{ session('delete') }}
    </div>
    @endif
  </p>

<table class="table">
    <thead>
        <tr>
        <th scope="col">Codice Prodotto</th>
        <th scope="col">Serie</th>
        <th scope="col">Data Vendita</th>
        <th scope="col">Tipo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $item)                  
        <tr>
            <th scope="row">{{ $item->id }} </th>
            <td>{{ $item->title }}</td>
            <td>{{ $item->series }}</td>
            <td>{{ $item->sale_date }}</td>
            <td>{{ $item->type }}</td>
            <td>{{ $item->price }}</td>
            <td>
                <a href="{{ route('comics.show', $item->id) }} " class="btn btn-primary">Show</a>
                <a href="{{ route('comics.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route ('comics.destroy',  $item->id) }} " method="post"  class="d-inline-block">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>
        @endforeach          
    </tbody>
    </table>

{{-- <div>
    {{ $comics->links() }}
</div> --}}

@endsection