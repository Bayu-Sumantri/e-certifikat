<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;  


class TemaSertif extends Model
{
    use HasFactory;

    protected $table="tema_sertifs";

    protected $fillable = [
        "nama_tema",
        "gambar_tema",
    ];

    public function siswa(): HasOne
    {
        return $this->hasOne(siswa::class, 'id_sertifikat');
    }
}
