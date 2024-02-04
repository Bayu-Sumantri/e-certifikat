<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $table="settings";

    protected $fillable = [
        "nama_pengajar",
        "instansi_pengajar",
        "tempat_sertifikat",
        "tgl_sertifikat",
        "ttd_pemimpin",
        "ttd_pengajar",
    ];
}
