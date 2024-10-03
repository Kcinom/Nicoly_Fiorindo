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
        Schema::create('servicos', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do serviço
            $table->text('descricao'); // Descrição detalhada do serviço
            $table->decimal('preco', 8, 2); // Preço do serviço
            $table->string('duracao')->nullable(); // Duração estimada do serviço (opcional)
            $table->timestamps(); // Cria os campos 'created_at' e 'updated_at' automaticamente
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicos');
    }
};
