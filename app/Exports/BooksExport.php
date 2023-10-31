<?php

namespace App\Exports;

use App\Models\Book;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BooksExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function view(): View
    {
        return view('exports.books', [
            'books' => Book::all()
        ]);
    }

    /*public function collection()
    {
        return Book::all();
    }*/
}
