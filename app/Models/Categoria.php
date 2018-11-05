<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Categoria Model
    |--------------------------------------------------------------------------
    |
    | Este model é reponsavel por persistir os dados de uma categoria
    |
    */

    /**
     * Atributo que recebe o nome da tabela referente a uma Categoria
     *
     * @var string
     */
    protected $table = 'categorias';

    /**
     * Retorna os produtos associados a categoria
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function produtos()
    {
        return $this->belongsToMany('App\Models\Produto');
    }
}
