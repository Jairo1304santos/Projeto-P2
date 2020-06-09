<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 50);
            $table->string('telefone', 15);
            $table->string('email', 50);
            $table->date('data_nascimento', 10);
            $table->string('cep', 14)->nullable();
            $table->string('logradouro', 20)->nullable();
            $table->string('complemento', 50)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->char('uf', 2)->nullable();
            $table->string('municipio', 50)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
