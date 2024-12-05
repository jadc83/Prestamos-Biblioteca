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
        Schema::create('ejemplar_prestamo', function (Blueprint $table) {
            $table->foreignId('ejemplar_id')->constrained('ejemplares');
            $table->foreignId('prestamo_id')->constrained();
            $table->primary(['ejemplar_id', 'prestamo_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejemplar_prestamo');
    }
};
