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
        Schema::create('manifestacoes', function (Blueprint $table) {
            $table->id();
            $table->string("nome_autor");
            $table->integer("codigo_rastreio");
            $table->date("data_envio");
            $table->enum("categoria",[
                "elogio",
                "sugestao",
                "reclamacao",
                "denuncia"
                
            ]);
            $table->string("titulo");
            $table->string("descricao");
            $table->enum("status",[
                "aberta",
                "encaminhada",
                "concluida",
            ])->default('aberta');
            $table->enum("tipo_usuario", [
                "aluno", 
                "servidor", 
                "visitante"
            ]);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manifestacoes');
    }
};
