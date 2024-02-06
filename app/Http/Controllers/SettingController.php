<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Settings = Setting::orderBy('nama_pengajar', 'asc')->simplePaginate(50);
        return view('settings.index', compact('Settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd ($request);
        $data = $request->validate([
            'nama_pengajar'         =>  ['required','string','max:255'],
            'instansi_pengajar'     =>  ['required','string','max:255'],
            'tempat_sertifikat'     =>  ['required','string','max:255'],
            'ttd_pemimpin'          =>  ['required', 'image', 'mimes:png', 'max:5048'],
            'ttd_pengajar'          =>  ['required', 'image', 'mimes:png', 'max:5048'],
            'tgl_sertifikat'        =>  ['required','date'],
        ]);

        $ttd_pemimpin = $request->file('ttd_pemimpin')->store('ttd_pemimpin');
        
        $ttd_pengajar = $request->file('ttd_pengajar')->store('ttd_pengajar');

       $Settings = Setting::create([
            "nama_pengajar"         => $request->nama_pengajar,
            "instansi_pengajar"     => $request->instansi_pengajar,
            "tempat_sertifikat"     => $request->tempat_sertifikat,
            "ttd_pemimpin"          => $ttd_pemimpin,
            "ttd_pengajar"          => $ttd_pengajar,
            "tgl_sertifikat"        => $request->tgl_sertifikat
        ]);


        // return $data;

        return redirect(route('Setting.index'))->with('success', "successfully uploaded your Settings");
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
