<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::create('anggota', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama');
        //     $table->string('kelas');
        //     $table->string('jenis_kelamin');
        //     $table->string('email');
        //     $table->text('alamat');
        //     $table->foreignId('id_eskul')->constrained('eskul')->onDelete('cascade');
        //     $table->foreignId('id_pendaftar')->constrained('pendaftar')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
