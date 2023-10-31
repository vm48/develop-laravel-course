<?php

namespace App\Http\Controllers;

use App\Exports\BooksExport;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::query()->with(['user', 'categories'])->get();

        /*$books = Book::query()->with('user')->first();*/

        return view('book', compact('books'));
    }

    public function booksExport()
    {
        Excel::store(new BooksExport(2018), 'books1.xlsx');

        return response(Storage::get('books1.xlsx'))->header('Content-Type',
            Storage::mimeType('books1.xlsx'));

        /*return Storage::get('books1.xlsx');*/
        //        return Excel::download(new BooksExport, 'books.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
