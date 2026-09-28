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
        Schema::create('autores', function (Blueprint $table) {
            $table->id('idautor'); //Chave Primária
            $table->string('nome', 45); //Nome do autor
            $table->string('nacionalidade', 45); //Nacionalidade do Autor
            $table->date('nascimento'); //Data de nascimento do autor
            $table->text('biografia'); //Biografia do autor, não bota 45 dentro porque não tem limite de caracteres
            $table->timestamps(); // Cria created_at e updated_at automaticamente mas não lembro pra que serve
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autores');
    }
};
