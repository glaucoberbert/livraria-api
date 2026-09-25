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
        Schema::create('livros', function (Blueprint $table) {
            $table->id('idlivro'); //id livro
            $table->string('titulo')->nullable(); //Aqui o título é até 255 por isso n coloquei capacidade, e parece pela imagem de referência que no livro nada é obrigatório, então é nulablle em tudo
            $table->string('isbn', 45)->nullable(); // Aqui como o limite é menor tem que por
            $table->integer('anopublicacao')->nullable(); //ano da publicação
            $table->string('descricao')->nullable();
            $table->integer('paginas')->nullable();
            $table->foreignId('idautor')->constrained('autores', 'idautor'); // aqui eu declarei a chave estrangeira id autor que referenciou o idautor na tabela autor
            $table->foreignId('idcategoria')->constrained('categorias', 'idcategoria'); //mesma coisa do anterior
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
