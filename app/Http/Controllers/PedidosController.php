<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Carrinho;

class PedidosController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Pedidos Controller
    |--------------------------------------------------------------------------
    |
    | Este controller é responsável pelo gerenciamento dos pedidos
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
        $this->middleware('auth');
        $this->carrinho = new Carrinho;
    }

    /**
     * Método responsável por exibir a tela de pedidos
     *
     * @param  String $key
     * @return Illuminate\View\View
     */
    public function pedidos()
    {
        $arr['pedidos'] = auth()->user()->pedidos()->get();
        return view('pages.pedidos.pedido', $arr);
    }

    /**
     * Método responsável por exibir o detalhe do pedido
     *
     * @param  Request $request
     * @param  Pedido $pedido
     * @return Illuminate\View\View
     */
    public function detalhe(Request $request, Pedido $pedido)
    {
        return view('pages.pedidos.detalhe', compact('pedido'));
    }

    /**
     * Método responsável por salvar o pedido
     *
     * @param  Request $request
     * @return Illuminate\View\View
     */
    public function salvarPedido(Request $request)
    {
        try{
            if ((Auth::check()) && ($request->session()->get('carrinho')) != null) {

                $usuario = auth()->user();
    
                $pedido = new Pedido;
                $pedido->usuario_id = $usuario->id;
                $pedido->total = $this->carrinho->somar($request->session()->get('carrinho'));
                $save = $pedido->save();

                foreach ($request->session()->get('carrinho') as $item){
                    $pedidoProduto = new PedidoProduto;
                    $pedidoProduto->pedido_id = $pedido->id;
                    $pedidoProduto->produto_id = $item->id;
                    $pedidoProduto->save();
                }
                if($save){
                    $request->session()->pull('carrinho');
                    return redirect()->back()->with('status', 'Pedido salvo com sucesso!'); 
                }
            }else{
                return redirect()->back()->with('status', 'Carrinho Vazio!'); 
            }
        }catch(Exception $e){
            return redirect()->back()->with('status', 'Oops! Problema ao salvar pedido. Por favor tente mais tarde'); 
        }
        
    }
}
