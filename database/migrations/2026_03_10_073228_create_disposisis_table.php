<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('disposisis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('surat_masuk_id');
            $table->string('tujuan');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disposisis');
    }
};