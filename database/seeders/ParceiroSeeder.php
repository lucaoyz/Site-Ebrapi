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
            'pa_nome' => 'Embrapa',
            'pa_logo' => '20062023-embrapa.png',
            'pa_link' => 'https://www.embrapa.br/',
        ]);

        DB::table('parceiros')->insert([
            'id' => '2',
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_nome' => 'Semeali',
            'pa_logo' => '29052023-logo-semeali.png',
            'pa_link' => 'http://www.semeali.com.br/inicial',
        ]);

        DB::table('parceiros')->insert([
            'id' => '3',
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_nome' => 'Cati',
            'pa_logo' => '20062023-logo-cati.png',
            'pa_link' => 'https://www.cati.sp.gov.br/portal/#',
        ]);

        DB::table('parceiros')->insert([
            'id' => '4',
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_nome' => 'Sementes Bonamigo',
            'pa_logo' => '20062023-logo-sementesbonamigo.png',
            'pa_link' => 'https://www.sementesbonamigo.com.br/',
        ]);

    }
}
