<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Pedido Model
    |--------------------------------------------------------------------------
    |
    | Este model é reponsavel por persistir os dados de um Pedido
    |
    */
    
    /**
     * Atributo que recebe o nome da tabela referente aos Pedidos
     *
     * @var string
     */
    protected $table = 'pedidos';

    /**
     * Retorna os pedidos associados com o usuario
     *
     * @return Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function usuario()
    {
        return $this->hasOne('App\Models\User');
    }

    /**
     * Retorna os produtos associados ao pedido
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produtos()
    {
        return $this->belongsToMany('App\Models\Produto');
    }

    /**
     * Conta o total de produtos do pedido
     *
     * @return int
     */
    public function totalProdutos()
    {
        return count($this->produtos()->get());
    }
}
