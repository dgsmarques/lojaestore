<?php

use Illuminate\Database\Seeder;

class CategoriasProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_produto')->insert([
            'categoria_id'  => 1,
            'produto_id'    => 1
        ]);

        DB::table('categoria_produto')->insert([
            'categoria_id'  => 1,
            'produto_id'    => 2
        ]);

        DB::table('categoria_produto')->insert([
            'categoria_id'  => 1,
            'produto_id'    => 3
        ]);

        DB::table('categoria_produto')->insert([
            'categoria_id'  => 2,
            'produto_id'    => 4
        ]);

        DB::table('categoria_produto')->insert([
            'categoria_id'  => 2,
            'produto_id'    => 5
        ]);

        DB::table('categoria_produto')->insert([
            'categoria_id'  => 2,
            'produto_id'    => 6
        ]);

        DB::table('categoria_produto')->insert([
            'categoria_id'  => 3,
            'produto_id'    => 7
        ]);

        DB::table('categoria_produto')->insert([
            'categoria_id'  => 3,
            'produto_id'    => 8
        ]);
    }
}
