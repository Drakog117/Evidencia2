@extends('layout.app')

@section('content')
    <h1>Añadir Libro</h1>

    <form method="POST" action="{{ route('books.store') }}">
        @csrf

        <label for="title">Título:</label>
        <input type="text" id="title" name="title">

        <label for="author_name">Nombre del Autor:</label>
        <input type="text" id="author_name" name="author_name">

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn">

        <label for="published_year">Año de Publicación:</label>
        <input type="number" id="published_year" name="published_year">

        <button type="submit">Añadir Libro</button>
    </form>
@endsection