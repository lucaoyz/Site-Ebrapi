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

        Proximas fotos, seguir mesma regra acima

        Nome do Produto
        Colocar o nome do produto em pro_nome

        Subtitulo do Produto
        Colocar o subtitulo do produto em pro_subtitulo

        Descrição do Produto
        Colocar o descrição do produto em pro_descricao

        */

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '20062023-brs-sertaneja.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Sertaneja',
            'pro_subtitulo' => 'Arroz',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '20062023-brs-esmeralda.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Esmeralda',
            'pro_subtitulo' => 'Arroz',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '20062023-brs-a502.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS A502',
            'pro_subtitulo' => 'Arroz',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '20062023-feijao-brs-perola.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Pérola',
            'pro_subtitulo' => 'Grupo Carioca',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '20062023-feijao-brs-estilo.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Estilo',
            'pro_subtitulo' => 'Grupo Carioca',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '20062023-feijao-brs-guariba.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Guariba',
            'pro_subtitulo' => 'Grupo Vigna Caupi',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '1',
            'pro_foto' => '20062023-feijao-brs-tumucumaque.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Tumucumaque',
            'pro_subtitulo' => 'Grupo Vigna Caupi',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '2',
            'pro_foto' => '20062023-xb8018.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'XB 8018',
            'pro_subtitulo' => 'Híbridos',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '2',
            'pro_foto' => '20062023-xb6055pro2.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'XB 6055 Pro',
            'pro_subtitulo' => 'Híbridos',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '2',
            'pro_foto' => '20062023-sx8555vip3.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'SX 8555 Vip3',
            'pro_subtitulo' => 'Híbridos',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '2',
            'pro_foto' => '20062023-xb6016vip3.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'XB 6016 Vip3',
            'pro_subtitulo' => 'Híbridos',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '3',
            'pro_foto' => '20062023-al-bandeirante.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Al Bandeirante',
            'pro_subtitulo' => 'Milho Variedade',
            'pro_descricao' => 'Características Agronômicas:
            - Tipo: Variedade;
            - Ciclo: Médio (130 dias);
            - Altura média da planta: 2,30m;
            - Altura média da Espiga: 1,25m;
            - Cor de grãos: Amarelo alaranjado;
            - Tipo de grãos: Semi duro;
            - Uso: Grãos e silagem;
            - Resistência ao acamamento: Ótima;
            - Resistência às principais doenças: Boa;
            - População: Safra normal: 65 mil plantas/hectare; Safrinha: 45 mil plantas/hectare;
            - Produtividade média: Safra normal: 7.500/kg/hectare; Safrinha: 3.500 Kg/hectare;
            - Recomendação: 15 – 23 Kg de semente/hectare;
            - Regiões indicadas para o plantio: Todo o Brasil, sem restrições.',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '3',
            'pro_foto' => '20062023-al-avare.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Al Avaré',
            'pro_subtitulo' => 'Milho Variedade',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '3',
            'pro_foto' => '20062023-cativerde.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cativerde',
            'pro_subtitulo' => 'Milho Variedade',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '20062023-br106.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BR 106',
            'pro_subtitulo' => 'Milho Variedade',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '20062023-soja-brs-284.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS 284',
            'pro_subtitulo' => 'Soja',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '21062023-brs-525.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS 525',
            'pro_subtitulo' => 'Soja',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '21062023-m-6410-ipro.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'M 6410 IPRO',
            'pro_subtitulo' => 'Soja',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '21062023-sorgo-forrageiro-podium.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Forrageiro Podium',
            'pro_subtitulo' => 'Sorgo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '21062023-sorgo-ponta-negra.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Ponta Negra',
            'pro_subtitulo' => 'Sorgo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '21062023-sorgo.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Semeali',
            'pro_subtitulo' => 'Sorgo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '1',
            'pa_id' => '4',
            'pro_foto' => '21062023-trigo.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Trigo',
            'pro_subtitulo' => 'Sob Consulta',
            'pro_descricao' => 'descricao',
        ]);

    }
}
