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
        "no_sertifikat",
        "tema_pelatihan",
        "desk_sertifikat",
        "juara_lomba",
        "nisn",
    ];
}
