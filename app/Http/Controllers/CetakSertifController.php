<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class CetakSertifController extends Controller
{
    public function cetakPDF(string $id_sertifikat, string $id)
    {
        $siswa = Siswa::findOrFail($id);
        $setting = Setting::findOrFail($id);

        // Determine the appropriate PDF view based on id_sertifikat
        $pdfView = 'sertif.sertif' . $id_sertifikat;

        // Check if the specified view exists
        if (!view()->exists($pdfView)) {
            abort(404); // Return a 404 Not Found error if the view doesn't exist
        }

        // Generate the PDF using the chosen view
        $pdf = PDF::loadView($pdfView, compact('siswa', 'setting'));

        // Download the PDF directly
        return $pdf->download();
    }



}
