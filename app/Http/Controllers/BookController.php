<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // Método para mostrar todos los libros
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Método para mostrar el formulario de creación de un libro
    public function create()
    {
        return view('books.create');
    }

    // Método para guardar un nuevo libro
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return redirect()->route('books.index');
    }

    // Método para mostrar un libro específico
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    // Método para mostrar el formulario de edición de un libro
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Método para actualizar un libro
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->route('books.index');
    }

    // Método para eliminar un libro
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index');
    }
}

