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
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 200)->nullable();
            $table->integer('idade')->nullable();
            $table->char('sexo', 1)->nullable();
            $table->char('cor', 50)->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->date('datanascimento')->nullable();
            $table->string('foto', 255)->nullable();
            $table->foreignId('idcliente')->constrained('clientes');
            $table->foreignId('idespecie')->constrained('especies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animais');
    }
};
