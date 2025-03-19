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
        Schema::create('conventionmedicales', function (Blueprint $table) {
            $table->id();
            $table ->text('matricule_pres', 20);
            $table ->text('date_pro', 20);
            $table ->text('provenance', 20);
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
        Schema::dropIfExists('conventionmedicales');
    }
};
