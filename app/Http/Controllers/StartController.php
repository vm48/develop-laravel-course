<?php

namespace App\Http\Controllers;

use App\Models\User;

class StartController extends Controller
{
    public function index()
    {
        $users = User::query()->with('books')->whereHas('books')->get();
        /*$users = User::query()->with([
            'books' => function ($q) {
                $q->where('id', '>=', 15)->where('id', '<=', 72);
            }
        ])->whereHas('books')->get();*/

        /*$users = User::query()->with('books')
            ->whereHas('books', function ($query) {
                $query->where('name', 'Doloribus voluptate impedit quod.');
            })->get();*/

        return view('index', compact('users'));
    }
}
