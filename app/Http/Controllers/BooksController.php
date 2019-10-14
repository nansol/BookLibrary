<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;



class BooksController extends Controller
{
    //
    public function index(){
        $books = Book::all();
        return view('books.index', compact('books'));
    }



    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'author'=> 'required',
            'name'=> 'required|unique:books',
            'edition'=> 'required|unique:books',
            'cover'=> 'required|unique:books',
            'isnb'=> 'required'
        ]);

        $book = new Book;
        $book->author = $request->input('author');
        $book->name = $request->input('name');
        $book->edition = $request->input('edition');
        $book->cover = $request->input('cover');
        $book->isbn = $request->input('isbn');
        $book->save();
        return redirect('/books');
    }

        public function show($id)
        {
            //
            $book = Book::find($id);
            return view('books.show', compact('book'));
        }
}

