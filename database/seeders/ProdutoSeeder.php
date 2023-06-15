<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
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

        Parceiro
        Olhar no arquivo ParceiroSeeder.php e achar o parceiro desejado (encontrar pelo nome dando um ctrl+f ou procurando), para saber o pa_id, você deve contar
        (de cima para baixo) até o parceiro e ver qual número dá, este número será o pa_id do produto.
        Colocar o id achado em pa_id

        Foto principal do produto (Se tiver)
        Colocar o arquivo na pasta /assets/img/fotosProdutos/principal/
        Colocar o nome do arquivo (com a extensão, por exemplo .jpeg .jpg .gif .png e etc) no pro_foto

        Nome do Produto
        Colocar o nome do produto em pro_nome

        Subtitulo do Produto
        Colocar o subtitulo do produto em pro_subtitulo

        Descrição do Produto
        Colocar o descrição do produto em pro_descricao

        */

        DB::table('produtos')->insert([
            'id' => '1',
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '15062023-twenty-one-pilots-desenho-desenho.jpg',
            'pro_nome' => 'produto teste',
            'pro_subtitulo' => 'produto subtitulo',
            'pro_descricao' => 'descricao',
        ]);

    }
}
