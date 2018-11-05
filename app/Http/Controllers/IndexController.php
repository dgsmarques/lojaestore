<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;

class IndexController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Index Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por gereciar os dados da Home 
    |
    */

    /**
     * Método responsável por exibir a tela Home
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $arr['categorias'] = Categoria::all();
        $arr['produtos'] = Produto::all();

        return view('pages.index.index', $arr);
    }
}
