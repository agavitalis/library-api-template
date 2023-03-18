<?php

namespace App\Http\Controllers;
use GrahamCampbell\Throttle\Facades\Throttle;
use Illuminate\Support\Facades\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function createBook(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book);
    }

    public function getBooks()
    {
        $books = Book::all();
        return response()->json($books);
    }

    public function getBook($bookId)
    {
        $book = Book::find($bookId);
        return response()->json($book);
    }

    public function updateBook(Request $request)
    {
        $book = Book::findOrFail($request->id);
        foreach($request->except(["id"]) AS $key => $value){
            $book->{$key} = $value;
        }
        $book->save();
        return response()->json($book);
    }

    public function deleteBook($bookId)
    {
        $book = Book::find($bookId)->delete();
        return response()->json($book);
    }
}
