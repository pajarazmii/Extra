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
        // Schema::create('eskul', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama_eskul');
        //     $table->foreignId('id_pembina')->constrained('roles')->onDelete('cascade');
        //     $table->foreignId('id_ketua')->constrained('roles')->onDelete('cascade');
        //     $table->string('jadwal');
        //     $table->text('tentang');
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
