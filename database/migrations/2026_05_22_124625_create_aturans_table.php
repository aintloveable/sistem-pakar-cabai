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
    Schema::create('aturan', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('gejala_id');
        $table->unsignedBigInteger('penyakit_id');

        $table->float('bobot');

        $table->timestamps();

        $table->foreign('gejala_id')
              ->references('id')
              ->on('gejala')
              ->onDelete('cascade');

        $table->foreign('penyakit_id')
              ->references('id')
              ->on('penyakit')
              ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aturans');
    }
};
