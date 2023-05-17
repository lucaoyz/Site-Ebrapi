<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categorias')->insert([
            'id' => '1',
            'ca_nome' => 'Sementes',
        ]);

        DB::table('categorias')->insert([
            'id' => '2',
            'ca_nome' => 'Fertilizantes',
        ]);

        DB::table('categorias')->insert([
            'id' => '3',
            'ca_nome' => 'Defensivos Agricolas',
        ]);

        DB::table('categorias')->insert([
            'id' => '4',
            'ca_nome' => 'Biologicos',
        ]);

        DB::table('categorias')->insert([
            'id' => '5',
            'ca_nome' => 'Linha Orgânica',
        ]);

    }
}
