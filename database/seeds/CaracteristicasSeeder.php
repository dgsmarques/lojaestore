<?php

use Illuminate\Database\Seeder;

class CaracteristicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristicas')->insert([
            'id'        => 1,
            'nome'      => 'altura',
            'icon'      => 'fas fa-arrows-alt-v',
        ]);

        DB::table('caracteristicas')->insert([
            'id'        => 2,
            'nome'      => 'largura',
            'icon'      => 'fas fa-arrows-alt-h',
        ]);

        DB::table('caracteristicas')->insert([
            'id'        => 3,
            'nome'      => 'profundidade',
            'icon'      => 'fas fa-arrow-circle-down',
        ]);

        DB::table('caracteristicas')->insert([
            'id'        => 4,
            'nome'      => 'peso',
            'icon'      => 'fas fa-balance-scale',
        ]);
    }
}
