<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Categorias Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável pelo gerenciamento das Categorias
    |
    */

    /**
     * Método responsável por exibir a tela de categorias
     *
     * @param  String $key
     * @return Illuminate\View\View
     */
    public function index($key = null)
    {
        if($key == null){
            return view('pages.categorias.index', ['categorias' => Categoria::all()]);
        }else{
            $arr['categoria'] = Categoria::where('key', $key)->get()->first();
            
            return view('pages.categorias.categoria', $arr);
        }

    }

}
