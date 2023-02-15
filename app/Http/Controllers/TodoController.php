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

    public function edit($id)
    {
        $data = Todo::find($id);

        return view('todo.edit', compact('data'));
    }

    public function update(Request $request)
    {
        $data = Todo::where('id', $request->id)->update([
            'name' => $request->nama
        ]);

        if (!$data) {
            Session::flash('error', 'Terjadi Error');
            return redirect()->route('edit-todo');
        }

        Session::flash('message', 'Berhasil mengubah Task');
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $data = Todo::destroy($id);

        if (!$data) {
            Session::flash('error', 'Terjadi Error');
            return redirect()->route('home');
        }

        Session::flash('message', 'Berhasil menghapus Task');
        return redirect()->route('home');
    }
}
