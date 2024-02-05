<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


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


    public function siswa(): HasOne
    {
        return $this->hasOne(siswa::class, 'id_setting');
    }
}
