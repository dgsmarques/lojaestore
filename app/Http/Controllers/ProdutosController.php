<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Produtos Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por manipular os dados dos Produtos
    |
    */

    /**
     * Método responsável por mostrar o detalhe do produto
     * 
     * @param String $key
     * @return Illuminate\View\View
     */
    public function detalhe($key)
    {
        return view('pages.produtos.detalhe', ['produto' => Produto::where('key', $key)->first()]);
    }
}
