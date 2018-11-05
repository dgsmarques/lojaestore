<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'id'    => 1,
            'nome'  => 'Cama, Mesa e Banho',
            'key'   => 'cama-e-banho',
            'color' => 'bg-primary',
        ]);

        DB::table('categorias')->insert([
            'id'    => 2,
            'nome'  => 'Decoração',
            'key'   => 'decoracao',
            'color' => 'bg-success',
        ]);

        DB::table('categorias')->insert([
            'id'    => 3,
            'nome'  => 'Eletro',
            'key'   => 'eletro',
            'color' => 'bg-danger',
        ]);
    }
}
