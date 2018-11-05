<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Carrinho;

class CarrinhoController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Carrinho Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável por manipular o conteudo do carrinho
    | de compras da nossa loja
    |
    */

    /**
     * Atributo que recebe um objeto do tipo Carrinho
     *
     * @var string
     */
    protected $carrinho;

    /**
     * Cria uma nova instância deste controller.
     *
     * @return void
     */
    public function __construct()
    {
        $this->carrinho = new Carrinho;
    }

    /**
     * Método responsável por exibir a tela do carrinho e
     * suas informações
     *
     * @param  Request $request
     * @return Illuminate\View\View
     */
    public function carrinho(Request $request)
    {
        $arr['carrinho'] = $request->session()->get('carrinho');
        
        if($arr['carrinho'] == null){
            $arr['carrinho'] = [];
        }

        $arr['countCarrinho'] = $this->carrinho->count($arr['carrinho']);
        $arr['totalCarrinho'] = $this->carrinho->somar($arr['carrinho']);

        return view('pages.carrinho.carrinho', $arr);
    }

    /**
     * Método responsável por adicionar a item ao carrinho
     *
     * @param  Request $request
     * @param  Produto $produto
     * @return Illuminate\View\View
     */
    public function add(Request $request, Produto $produto)
    {
        if($request->session()->exists('carrinho')){
            if (!in_array($produto, $request->session()->get('carrinho'))) { 
                $request->session()->push('carrinho', $produto);
                return redirect()->back()->with('status', 'Item adicionado ao carrinho!'); 
            }else{
                return redirect()->back()->with('status', 'Item já adicionado ao carrinho!'); 
            }
        }else{
            $request->session()->push('carrinho', $produto);
            return redirect()->back()->with('status', 'Item adicionado ao carrinho!'); 
        }

    }

    /**
     * Método responsável por remover item do carrinho
     *
     * @param  Request $request
     * @param  Produto $produto
     * @return Illuminate\View\View
     */
    public function remove(Request $request, Produto $produto)
    {
        $carrinho = session()->pull('carrinho', []);

        if(($key = array_search($produto, $carrinho)) !== false) {
            unset($carrinho[$key]);
        }

        session()->put('carrinho', $carrinho);

        return redirect()->back()->with('status', 'Item removido do carrinho!'); 

    }
    
}
