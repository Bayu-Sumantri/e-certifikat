<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class CetakSertifController extends Controller
{

    // public function cetakPDF1(string $id)
    // {
    //     $Siswa = Siswa::findOrFail($id);

    //     // Ganti 'print_resi.print_transaksi' dengan nama view yang sesuai
    //     // return view('sertif.sertif1', compact('Siswa'));

    //     $pdf = Pdf::loadview('sertif.sertif1', compact('Siswa'));

    //     return $pdf->download('Setif.pdf');
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
