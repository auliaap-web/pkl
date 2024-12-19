<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgresController extends Controller
{
    public function index()
    {
        $progres = Progres::with('rumah')->get();
        return response()->json($progres);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_rumah' => 'required|exists:rumah,id_rumah',
            'index1' => 'nullable',
            'index2' => 'nullable',
            'index3' => 'nullable',
            'index4' => 'nullable',
            'index5' => 'nullable',
        ]);

        $progres = Progres::create($validated);
        return response()->json($progres);
    }
}
