<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
   
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo', 8);
            $table->string('nome', 50);
            $table->integer('quantidade');
            $table->string('custo', 50)->nullable();
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
            $table->softDeletes();
            $table->timestamps();
            
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}

/*          $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->unsignedBigInteger('fornecedor_id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');