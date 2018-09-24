@extends('books.layout')

@section('content')

<h1 class="text-center">LIBROS</h1>


<div class="container">

	<a class="btn btn-info mb-3" href="{{ route('books.create') }}">Agregar libros</a>

	 @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Título</th>
      <th scope="col">Reseña</th>
    
    </tr>
  </thead>
  <tbody>
  	@foreach($books as $book)
    <tr>
      <th scope="row">{{ $book->id}}</th>
      <td>{{ $book->title}}</td>
      <td>{{ $book->description}}</td>
     
    </tr>

  @endforeach
   
  </tbody>
</table>

{{ $books->links() }}


</div>



@endsection