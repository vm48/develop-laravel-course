<?php

namespace App\Services;

use App\Models\Book;
use App\Services\Interfaces\BooksContract;

class BooksServices implements BooksContract
{
    public function get()
    {
        return Book::query()->with(['user', 'categories'])->paginate(10);
    }
}