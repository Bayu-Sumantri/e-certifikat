<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemaSertif extends Model
{
    use HasFactory;

    protected $table="tema_sertifs";

    protected $fillable = [
        "nama_tema",
        "gambar_tema",
    ];
}
