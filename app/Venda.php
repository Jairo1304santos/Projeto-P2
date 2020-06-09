<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use SoftDeletes;

    protected $fillable = ['quantidade','valor', 'data', 'cliente_id', 'produto_id'];


    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function produto()
    {
        return $this->belongsTo('App\Produto');
    }
}
