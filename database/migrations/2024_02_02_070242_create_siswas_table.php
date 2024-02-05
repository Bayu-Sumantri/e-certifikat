<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('id_sertifikat')->Reference('id')->on('tema_sertifs');
            $table->foreignId('id_setting')->Reference('id')->on('settings');
            $table->uuid('no_sertifikat');
            $table->string('tema_pelatihan')->nullable();
            $table->string('desk_sertifikat');
            $table->string('nisn');
            // $table->string('juara_lomba')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
