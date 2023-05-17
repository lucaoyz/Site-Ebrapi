<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class SubCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Arroz',
        ]);

        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Milho',
        ]);

        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Feijao',
        ]);

        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Soja',
        ]);

        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Sorgo',
        ]);

        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Trigo',
        ]);
    }
}
