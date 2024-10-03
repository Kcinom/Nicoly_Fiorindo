<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do cliente
            $table->string('email')->unique(); // Email do cliente, único
            $table->string('telefone')->nullable(); // Telefone, pode ser opcional
            $table->text('endereco')->nullable(); // Endereço, também opcional
            $table->timestamps(); // Cria os campos 'created_at' e 'updated_at' automaticamente
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
