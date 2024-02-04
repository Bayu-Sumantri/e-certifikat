<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Siswa = Siswa::orderBy('nama', 'asc')->simplePaginate(50);
        return view('create_siswa.list', compact('Siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Siswa = Siswa::orderBy('nama', 'asc')->simplePaginate(50);
        return view('create_siswa.index', compact('Siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd ($request);
        $data = $request->validate([
            'nama'             => ['required', 'string', 'max:255'],
            'no_sertifikat'    => ['required', 'string', 'max:255'],
            'tema_pelatihan'   => ['required', 'string', 'max:255'],
            'desk_sertifikat'  => ['required', 'string', 'max:255'],
            'nisn'             => ['required', 'string', 'max:11'],
            'juara_lomba'      => ['required', 'string', 'max:255'],
        ]);



        Siswa::create([
            'nama'    => $request->nama,
            'desk_sertifikat'     => $request->desk_sertifikat,
            'no_sertifikat'   => $request->no_sertifikat,
            'tema_pelatihan'           => $request->tema_pelatihan,
            'nisn'           => $request->nisn,
            'juara_lomba'           => $request->juara_lomba,
        ]);

        // Flash message using Laravel Alert package (you need to install it)
        // Alert::success('Berhasil', 'Success Make a Product');

        // Redirect to the correct route (Product.index)
        return redirect(route('Siswa.index'))->with('success', 'Successfully uploaded your Product');
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
    public function destroy(Siswa $Siswa)
    {
        $Siswa->delete();
        return redirect()->route('Siswa.index')->with('success', 'Sertifikat deleted successfully.');
    }
}
