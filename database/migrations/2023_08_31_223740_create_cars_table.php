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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 45);
            $table->string('modelo', 45);
            $table->string('marca', 45);
            $table->integer('ano');
            $table->text('descricao')->nullable();
            $table->string('cor', 45);
            $table->string('chassi', 45);
            $table->decimal('diaria', 12, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
