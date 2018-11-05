<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoProduto extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Pedido Produto Model
    |--------------------------------------------------------------------------
    |
    | Este model é reponsavel por associar o pedido ao produto
    |
    */

    /**
     * Atributo que recebe o nome da tabela referente aos Pedido Produto
     *
     * @var string
     */
    protected $table = 'pedido_produto';

    /**
     * Atributo que recebe desabilita os timestamps deste model
     *
     * @var string
     */
    public $timestamps = false;
}
