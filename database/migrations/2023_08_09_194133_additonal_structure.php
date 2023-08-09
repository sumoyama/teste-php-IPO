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
        Schema::create('estrutura_adicionais', function (Blueprint $table) {
            $table->id();
            $table->boolean('flipchart');
            $table->boolean('backdrop');
            $table->boolean('banners');
            $table->boolean('telao');
            $table->boolean('placas_mesa');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estrutura_adicionais');
    }
};