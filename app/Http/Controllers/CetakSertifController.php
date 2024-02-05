<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class CetakSertifController extends Controller
{
    // public function cetakPDF(string $id_sertifikat, string $id)
    // {
    //     $siswa = Siswa::findOrFail($id);
    //     $setting = Setting::findOrFail($id);

    //     // Determine the appropriate PDF view based on id_sertifikat
    //     $pdfView = 'sertif.sertif' . $id_sertifikat;

    //     // Check if the specified view exists
    //     if (!view()->exists($pdfView)) {
    //         abort(404); // Return a 404 Not Found error if the view doesn't exist
    //     }

    //     // Generate the PDF using the chosen view
    //     $pdf = PDF::loadView($pdfView, compact('siswa', 'setting'));

    //     // Download the PDF directly
    //     return $pdf->download();
    // }

    public function cetakPDF1(string $id)
    {
        $Siswa = Siswa::findOrFail($id);

        // Ganti 'print_resi.print_transaksi' dengan nama view yang sesuai
        return view('sertif.sertif1', compact('Siswa'));
    }


    public function cetakPDF2(string $id)
    {
        $Siswa = Siswa::findOrFail($id);

        // Ganti 'print_resi.print_transaksi' dengan nama view yang sesuai
        return view('sertif.sertif2', compact('Siswa'));
    }

    public function cetakPDF3(string $id)
    {
        $Siswa = Siswa::findOrFail($id);

        // Ganti 'print_resi.print_transaksi' dengan nama view yang sesuai
        return view('sertif.sertif3', compact('Siswa'));
    }

    public function cetakPDF($id_sertifikat, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $setting = Setting::findOrFail($id);

        $pdfView = 'sertif.sertif' . $id_sertifikat;

        if (!view()->exists($pdfView)) {
            abort(404);
        }

        $pdf = PDF::loadView($pdfView, compact('siswa', 'setting'));

        return $pdf->download();
    }
}
