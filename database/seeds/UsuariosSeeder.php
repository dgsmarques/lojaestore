<?php

use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'              => 'Daniel Sousa Martins',
            'email'             => 'danielsousamartins@ggmail.com',
            'password'          => bcrypt('102030'),
            'data_nascimento'   => '1984-10-23',
            'telefone'          => '11 87233-2133',
            'logardouro'        => 'Rua Roberto Simonsen',
            'numero'            => '507',
            'complemento'       => '',
            'cep'               => '55018-570',
            'cidade'            => 'Caruaru',
            'estado'            => 'PE',
            'pais'              => 'Brasil',
        ]);
    }
}
