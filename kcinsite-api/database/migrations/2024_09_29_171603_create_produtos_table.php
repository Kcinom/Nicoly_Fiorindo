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
        // Criação da tabela 'produtos'
        Schema::create('produtos', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('nome'); // Nome do produto
            $table->text('descricao')->nullable(); // Descrição do produto, campo opcional (nullable)
            $table->decimal('preco', 8, 2); // Preço do produto, 8 dígitos no total, 2 casas decimais
            $table->integer('quantidade_estoque')->default(0); // Quantidade em estoque do produto, padrão 0
            $table->string('categoria')->nullable(); // Categoria do produto, campo opcional
            $table->timestamps(); // Cria os campos 'created_at' e 'updated_at' automaticamente
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
