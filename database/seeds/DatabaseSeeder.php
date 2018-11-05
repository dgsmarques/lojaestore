<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuariosSeeder::class);
        $this->call(CategoriasSeeder::class);
        $this->call(ProdutosSeeder::class);
        $this->call(CategoriasProdutosSeeder::class);
        $this->call(CaracteristicasSeeder::class);
        $this->call(CaracteristicasProdutosSeeder::class);
    }
}
