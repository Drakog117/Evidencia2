@extends('layout.app')

@section('content')
    <h1>Editar Libro</h1>

    <form method="POST" action="{{ route('books.update', $book) }}">
        @csrf
        @method('PUT')

        <label for="title">Título:</label>
        <input type="text" id="title" name="title" value="{{ $book->title }}">

        <label for="author_name">Nombre del Autor:</label>
        <input type="text" id="author_name" name="author_name" value="{{ $book->author_name }}">

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}">

        <label for="published_year">Año de Publicación:</label>
        <input type="number" id="published_year" name="published_year" value="{{ $book->published_year }}">

        <button type="submit">Actualizar Libro</button>
    </form>
@endsection

