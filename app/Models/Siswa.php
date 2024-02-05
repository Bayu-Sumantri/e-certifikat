<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Siswa extends Model
{
    use HasFactory;

    protected $table="siswas";

    protected $fillable = [
        "nama",
        "id_sertifikat",
        "id_setting",
        "no_sertifikat",
        "tema_pelatihan",
        "desk_sertifikat",
        // "juara_lomba",
        "nisn",
    ];

    public function tenasertif(): BelongsTo
    {
        return $this->belongsTo(TemaSertif::class, 'id_sertifikat');
    }

    public function setting(): BelongsTo
    {
        return $this->belongsTo(Setting::class, 'id_setting');
    }
}
