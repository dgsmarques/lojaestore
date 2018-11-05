<?php

use Illuminate\Database\Seeder;

class CaracteristicasProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 1,
            'valor'             => '5 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 1,
            'valor'             => '160 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 1,
            'valor'             => '220 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 1,
            'valor'             => '2,000 kg'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 2,
            'valor'             => '50 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 2,
            'valor'             => '34 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 2,
            'valor'             => '2 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 2,
            'valor'             => '1,000 kg'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 3,
            'valor'             => '90 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 3,
            'valor'             => '13 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 3,
            'valor'             => '1 m'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 3,
            'valor'             => '4,000 kg'
        ]);

        // 

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 4,
            'valor'             => '3 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 4,
            'valor'             => '12 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 4,
            'valor'             => '110 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 4,
            'valor'             => '3,000 kg'
        ]);

        // 

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 5,
            'valor'             => '5 3cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 5,
            'valor'             => '10 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 5,
            'valor'             => '220 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 5,
            'valor'             => '5,000 kg'
        ]);

        // 

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 6,
            'valor'             => '567 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 6,
            'valor'             => '2 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 6,
            'valor'             => '34 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 6,
            'valor'             => '22,000 kg'
        ]);

        // 

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 7,
            'valor'             => '5 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 7,
            'valor'             => '160 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 7,
            'valor'             => '220 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 7,
            'valor'             => '2,000 kg'
        ]);

        // 

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 1,
            'produto_id'        => 8,
            'valor'             => '50 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 2,
            'produto_id'        => 8,
            'valor'             => '165 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 3,
            'produto_id'        => 8,
            'valor'             => '20 cm'
        ]);

        DB::table('caracteristica_produto')->insert([
            'caracteristica_id' => 4,
            'produto_id'        => 8,
            'valor'             => '4,000 kg'
        ]);
    }
}
