<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Produto Model
    |--------------------------------------------------------------------------
    |
    | Este model é reponsavel por persistir os dados dos produtos
    |
    */

    /**
     * Atributo que recebe o nome da tabela referente ao Produto
     *
     * @var string
     */
    protected $table = 'produtos';

    /**
     * Retorna as categorias associadas ao produto
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categorias()
    {
        return $this->belongsToMany('App\Models\Categoria');
    }

    /**
     * Retorna as caracteristicas associadas ao produto
     *
     * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function caracteristicas()
    {
        return $this->belongsToMany('App\Models\Caracteristica')->withPivot('valor');
    }
}
