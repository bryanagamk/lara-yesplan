<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TodoController extends Controller
{
    public function create()
    {
        return view('todo.create');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('login');
        }

        $todo = Todo::create([
            'user_id' => Auth::user()->id,
            'name' => $request->nama,
        ]);

        if (!$todo) {
            Session::flash('error', 'Terjadi Error');
            return redirect()->route('tambah-todo');
        }

        Session::flash('message', 'Berhasil menambahkan Task Baru');
        return redirect()->route('home');
    }
}
