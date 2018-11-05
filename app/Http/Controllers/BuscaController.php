<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class BuscaController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Busca Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por gerenciar a busca de produtos e
    | encaminha para a pagina de busca
    |
    */

    /**
     * Método que executa a busca dos produtos
     *
     * @param  Request $request
     * @return Illuminate\View\View
     */
    public function busca(Request $request)
    {
        $arr['termo'] = $request->input('busca');
        $arr['produtos'] = Produto::where('nome', 'like', '%' . $arr['termo'] . '%')->get();

        return view('pages.buscas.busca', $arr);
    }
}
