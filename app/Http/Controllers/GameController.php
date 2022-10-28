<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\Publisher;


class GameController extends Controller
{
    public function create(){
        return view('create', ['publishers' => Publisher::all()]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            "judul" => 'required|string',
            "tahun" => 'required|string',
            "platform" => 'required|string',
            "pengembang_id" => 'required',
        ]);

        Games::create($validateData);

        return redirect('/games')->with('success', 'Mahasiswa berhasil ditambahkan');
    }

    public function show(Games $id)
    {
        return view('show', [
            'games' => $id
        ]);
    }
}
