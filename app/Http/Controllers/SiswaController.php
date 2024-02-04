<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\TemaSertif;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $Sertif = TemaSertif::all();
        return view('create_siswa.index', compact('Siswa', 'Sertif'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         $data = $request->validate([
             'nama'             => ['required', 'string', 'max:255'],
             'id_sertifikat'    => ['required'],
             'tema_pelatihan'   => ['required', 'string', 'max:255'],
             'desk_sertifikat'  => ['required', 'string', 'max:255'],
             'nisn'             => ['required', 'string', 'max:11'],
             'juara_lomba'      => ['required', 'string', 'max:255'],
         ]);

         // Get the latest Siswa entry
         $latestSiswa = Siswa::latest()->first();

         // Determine the next sequential number
         $nextNumber = $latestSiswa ? $latestSiswa->no_sertifikat + 1 : 0;

         // Check if the number is within the allowed range (0 to 9999)
         if ($nextNumber <= 9999) {
             // Create the Siswa entry
             Siswa::create([
                 'nama'              => $request->nama,
                 'id_sertifikat'     => $request->id_sertifikat,
                 'desk_sertifikat'   => $request->desk_sertifikat,
                 'no_sertifikat'     => str_pad($nextNumber, 4, '9999', STR_PAD_LEFT),
                 'tema_pelatihan'    => $request->tema_pelatihan,
                 'nisn'              => $request->nisn,
                 'juara_lomba'       => $request->juara_lomba,
             ]);

             return redirect(route('Siswa.index'))->with('success', 'Successfully uploaded your Product');
         } else {
             return redirect(route('Siswa.index'))->with('error', 'Maximum sequential number reached');
         }
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
