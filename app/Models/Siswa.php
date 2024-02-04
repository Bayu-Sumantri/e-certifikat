<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table="siswas";

    protected $fillable = [
        "nama",
        "id_sertifikat",
        "no_sertifikat",
        "tema_pelatihan",
        "desk_sertifikat",
        "juara_lomba",
        "nisn",
    ];
}
