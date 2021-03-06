<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('codigo');
            $table->string('nome', 50);
            $table->string('telefone', 13);
            $table->string('cnpj', 18);
            $table->string('email', 50);
            $table->string('cep', 10)->nullable();
            $table->string('logradouro', 30)->nullable();
            $table->string('complemento', 30)->nullable();
            $table->string('bairro', 20)->nullable();
            $table->string('uf', 2);
            $table->string('municipio', 30)->nullable();
            $table->softDeletes();
            $table->timestamps(); 
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
}
