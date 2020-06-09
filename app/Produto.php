<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produto extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['codigo', 'nome', 'quantidade', 'custo', 'categoria_id', 'fornecedor_id'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    public function fornecedor()
    {
        return $this->belongsTo('App\Fornecedor');
    }
    
}
