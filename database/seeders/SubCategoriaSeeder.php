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
            'sub_nome' => 'Grãos',
        ]);

        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Forrageiras e Adubacao Verde',
        ]);

        DB::table('sub_categorias')->insert([
            'ca_id' => '1',
            'sub_nome' => 'Hortalicas',
        ]);
    }
}
