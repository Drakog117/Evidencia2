@extends('layout.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>{{ $book->author_name }}</p>
    <p>{{ $book->isbn }}</p>
    <p>{{ $book->published_year }}</p>

    <a href="{{ route('books.edit', $book) }}">Editar</a>
    <form method="POST" action="{{ route('books.destroy', $book) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection

