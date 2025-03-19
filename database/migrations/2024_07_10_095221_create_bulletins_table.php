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
        Schema::create('bulletins', function (Blueprint $table) {
            $table->id();
            $table ->text('matricule_cli', 20);
            $table ->text('nom_cli', 20);
            $table ->text('code_cli', 20);
            $table ->text('numero_cli', 20);
            $table ->text('date', 20);
            $table ->text('lieu', 20);
            $table ->text('code_rang', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulletin');
    }
};
