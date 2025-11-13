<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // all digunakan untuk memangil semua data yang ada di table
        $users = User::all();

        // compact digunakan untuk melempar data ke view
        return view('welcome', compact('users'));
    }

    public function show($id)
    {
        // find or fail digunakan untuk mencari data berdasrkan kolom id
        $user = User::findOrFail($id);

        return view('user-detail', compact('user'));
    }
}
