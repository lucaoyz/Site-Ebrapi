<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ParceiroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                /*

        Categorias
        Sementes = ca_id => 1,
        Fertilizantes = ca_id => 2,
        Defensivos Agricolas = ca_id => 3,
        Biologicos = ca_id => 4,
        Linha Orgânica = ca_id => 5,

        Sub Categorias
        Grãos = sub_id => 1,
        Forrageiras e Adubacao Verde = sub_id => 2,
        Hortalicas = sub_id => 3,
        Microbiologicos = sub_id => 4,
        Feromonios = sub_id => 5,
        Armadilhas = sub_id => 6,
        Inseticidas = sub_id => 7,
        Herbicidas = sub_id => 8,
        Fungicidas = sub_id => 9,
        Acaricidas = sub_id => 10,

        Nome do Parceiro
        Colocar o nome do parceiro em pa_nome

        Logo do parceiro (Se tiver)
        Colocar o arquivo na pasta public/assets/img/parceiros/
        Colocar o nome do arquivo (com a extensão, por exemplo .jpeg .jpg .gif .png e etc) no pa_logo

        Link do parceiro (Se tiver)
        Colocar o link do arquivo em pa_link

        */

        DB::table('parceiros')->insert([
            'id' => '1',
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_nome' => 'lucas teste',
            'pa_logo' => '15062023-joker.gif',
            'pa_link' => 'https://www.instagram.com/',
        ]);
        
    }
}
