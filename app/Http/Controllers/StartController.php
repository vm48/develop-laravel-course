<?php

namespace App\Http\Controllers;

use App\Models\User;

class StartController extends Controller
{
    public function index()
    {
        $users = User::query()->with('books')->get();

        return view('index', compact('users'));
    }
}
