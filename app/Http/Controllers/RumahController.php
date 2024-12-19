<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahController extends Controller
{
    public function index()
    {
        $rumah = Rumah::with('progres')->get();
        return response()->json($rumah);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pemilik' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'alamat' => 'required',
        ]);

        $rumah = Rumah::create($validated);
        return response()->json($rumah);
    }
}
