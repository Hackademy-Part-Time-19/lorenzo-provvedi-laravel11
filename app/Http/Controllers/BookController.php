<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('Books.elencolibri', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Books.forminserimentonuovolibro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'genere' => 'required',
            'pubblicazione' => 'required|max:4',
            'title' => 'required',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book create with success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('Books.formmodificalibro', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'genere' => 'required' . $book->id,
            'pubblicazione' => 'required' . $book->id . 'max:4',
            'title' => 'required' . $book->id,
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Book created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Article deleted successfully');
    }
}
