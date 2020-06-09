<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
protected $table = "fornecedores";
protected $fillable = ['codigo', 'nome','telefone', 'cnpj', 'email', 'cep', 'logradouro', 'complemento', 'bairro', 'uf',
    'municipio'];
}
