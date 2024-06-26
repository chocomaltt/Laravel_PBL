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
        Schema::create('artikels', function (Blueprint $table) {
            $table->id('artikel_id');
            $table->foreignId('kader_id')->constrained('kaders', 'kader_id');
            $table->string('judul', 250)->nullable();
            $table->text('isi')->nullable();
            $table->string('tag', 50)->nullable();
            $table->string('foto_artikel_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikels');
    }
};
