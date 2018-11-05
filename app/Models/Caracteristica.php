<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    /*
    |--------------------------------------------------------------------------
    | Caracteristica Model
    |--------------------------------------------------------------------------
    |
    | Este model é reponsavel por persistir os dados das caracteristicas
    |
    */

    /**
     * Atributo que recebe o nome da tabela referente a Caracteristica
     *
     * @var string
     */
    protected $table = 'caracteristicas';
}
