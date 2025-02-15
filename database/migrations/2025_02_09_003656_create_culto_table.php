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
        Schema::create('culto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membro_id')->constrained('membros')->onDelete('cascade'); // Chave estrangeira para membros
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('culto');
    }
};
