@extends('layout.app')

@section('content')
    <h1>Libros</h1>

    <a href="{{ route('books.create') }}">Añadir nuevo libro</a>

    @foreach ($books as $book)
        <div>
            <h2>{{ $book->title }}</h2>
            <p>{{ $book->author_name }}</p>
            <a href="{{ route('books.edit', $book) }}">Editar</a>
            <form method="POST" action="{{ route('books.destroy', $book) }}">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
@endsection
