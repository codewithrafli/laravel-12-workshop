<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // all digunakan untuk memangil semua data yang ada di table
        $books = Book::all();

        // compact digunakan untuk melempar data ke view
        return view('home', compact('books'));
    }

    public function show($id)
    {
        // find or fail digunakan untuk mencari data berdasrkan kolom id
        $book = Book::findOrFail($id);

        return view('detail', compact('book'));
    }
}
