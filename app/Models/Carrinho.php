<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Carrinho Model
    |--------------------------------------------------------------------------
    |
    | Este model é responsável por manuipular o carrinho de compras
    |
    */

    /**
     * Método responsável por somar o carrinho de compras
     * 
     * @param array $arr
     * @return float $soma
     */
    public function somar($arr)
    {
        $soma = 0;
        foreach($arr as $item){
            $soma += $item->preco;
        }  

        return $soma;
    }

    /**
     * Método responsável por contar os itens do carrinho
     * 
     * @param array $arr
     * @return int 
     */
    public function count($arr)
    {
        return count($arr);
    }
}
