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
            $table->string('nacionalidade', 45)->nullable(); //Nacionalidade do Autor, o nullable() indica que ela pode ser nula, é o equivalente ao string? ou o string.Empty do C#
            $table->date('nascimento'); //Data de nascimento do autor
            $table->text('biografia')->nullable(); //Biografia do autor, não bota 45 dentro porque não tem limite de caracteres
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
