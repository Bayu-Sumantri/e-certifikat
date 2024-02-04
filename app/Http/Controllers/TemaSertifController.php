<?php

namespace App\Http\Controllers;

use App\Models\TemaSertif;
use Illuminate\Http\Request;

class TemaSertifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tema = TemaSertif::orderBy('nama_tema', 'asc')->simplePaginate(50);
        return view('tema.pilih', compact('Tema'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Tema = TemaSertif::orderBy('nama_tema', 'asc')->simplePaginate(50);
        return view('tema.index', compact('Tema'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd ($request);
        $data = $request->validate([
            'nama_tema'         =>  ['required', 'string', 'max:255'],
            'gambar_tema'       =>  ['required', 'image', 'mimes:png', 'max:5048'],

        ]);

        $gambar_tema = $request->file('gambar_tema')->store('gambar_tema');

        $Tema = TemaSertif::create([
            "nama_tema"         => $request->nama_tema,
            "gambar_tema"       => $gambar_tema,
        ]);


        // return $data;

        return redirect(route('Tema.index'))->with('success', "successfully uploaded your anime");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
