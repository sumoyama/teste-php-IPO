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
        Schema::create('space', function (Blueprint $table) {
            $table->id();
            $table->string('endereco');
            $table->string('telefone');
            $table->integer('limit_partic');
            $table->time('func_inicio');
            $table->time('func_final');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('space');
    }
};