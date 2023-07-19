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
            'pa_id' => '1',
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
            'pa_id' => '1',
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
            'pa_id' => '6',
            'pro_foto' => '26062023-m-6410-ipro.png',
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
            'pa_id' => '6',
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
            'pa_id' => '6',
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
            'pa_id' => '6',
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
            'pa_id' => '6',
            'pro_foto' => '21062023-trigo.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Trigo',
            'pro_subtitulo' => 'Sob Consulta',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-BRS-PAIAGUAS.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Paiaguás',
            'pro_subtitulo' => 'Brachiaria Brizantha',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-BRS-PIATA.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Piatã',
            'pro_subtitulo' => 'Brachiaria Brizantha',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-cv-marandu.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Marandú',
            'pro_subtitulo' => 'Brachiaria Brizantha',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-Xaraes-MG-5.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Xaraés MG-5',
            'pro_subtitulo' => 'Brachiaria Brizantha',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-cv-basilisk.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'CV Basilisk',
            'pro_subtitulo' => 'Brachiaria Decumbens',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-brs-ipypora.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Ipyporã',
            'pro_subtitulo' => 'Brachiaria Híbrida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-cv-ruziziensis.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Ruziziensis',
            'pro_subtitulo' => 'Brachiaria Ruziziensis',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-cv-humidicola.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Humidícola',
            'pro_subtitulo' => 'Brachiaria Humidícola',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-brachiaria-cv-llanero.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv LLANERO',
            'pro_subtitulo' => 'Brachiaria Humidícola',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-brs-quenia.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Quênia',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-brs-tamania.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Tamania',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-brs-zuri.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'BRS Zuri',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-cv-aruana.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Aruana',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-cv-massai.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Massai',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-cv-tanzania.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Tanzânia',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-cv-mombaca.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Mombaça',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '4',
            'pro_foto' => '22062023-panicum-cv-miyagui.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'cv Miyagui',
            'pro_subtitulo' => 'Panicum Maximum',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '6',
            'pro_foto' => '22062023-aveia-preta.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Aveia Preta',
            'pro_subtitulo' => 'Subtitulo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '6',
            'pro_foto' => '22062023-plantacao-milheto.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Milheto',
            'pro_subtitulo' => 'Subtitulo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '6',
            'pro_foto' => '22062023-crotalaria.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Crotalárias',
            'pro_subtitulo' => 'Subtitulo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '6',
            'pro_foto' => '22062023-feijao-de-porco.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Feijão de Porco',
            'pro_subtitulo' => 'Subtitulo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '6',
            'pro_foto' => '22062023-guandu.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Guandu',
            'pro_subtitulo' => 'Subtitulo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '2',
            'pa_id' => '6',
            'pro_foto' => '22062023-mucuna.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Mucuna',
            'pro_subtitulo' => 'Subtitulo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-expositor-feltrin.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Sementes',
            'pro_subtitulo' => 'Linha Envelopes',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-abobora-hiroko.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Hiroko',
            'pro_subtitulo' => 'Abóbora Tetsukabuto',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-abobora-rajada-seca.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Rajada Seca',
            'pro_subtitulo' => 'Abóbora Seca/Pescoço',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-abobora-xingo.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Xingó',
            'pro_subtitulo' => 'Abóbora',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-abobrinha-caserta.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Caserta Italiana',
            'pro_subtitulo' => 'Abobrinha',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-menina-brasileira-precoce.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Menina Brasileira Precoce',
            'pro_subtitulo' => 'Abobrinha Menina Brasileira',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-alface-mauren.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Mauren',
            'pro_subtitulo' => 'Alface Americana',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-alface-crocantela.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Crocantela',
            'pro_subtitulo' => 'Alface Crespa Verde',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-alface-betania.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Betânia',
            'pro_subtitulo' => 'Alface Mimosa Roxa',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-alface-giovana.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Giovana',
            'pro_subtitulo' => 'Alface Mimosa Verde',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-alface-veneranda.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Veneranda',
            'pro_subtitulo' => 'Alface Crespa Verde',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-alface-rubinela.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Rubinela',
            'pro_subtitulo' => 'Alface Crespa Roxa',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-alface-elisabeth.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Elisabeth',
            'pro_subtitulo' => 'Alface Lisa',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-berinjela-classic.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Classic',
            'pro_subtitulo' => 'Berinjela',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-berinjela-marjorie.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Marjorie',
            'pro_subtitulo' => 'Berinjela',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-beterraba-katrina.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Katrina',
            'pro_subtitulo' => 'Beterraba',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-brocolis-coliseu.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Coliseu',
            'pro_subtitulo' => 'Brócolis Verão',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-cebola-baia-herval.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Baia Herval',
            'pro_subtitulo' => 'Cebola Amarela',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-cenoura-brasilia-irece.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Brasília Irecê',
            'pro_subtitulo' => 'Cenoura Verão',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-cenoura-nantes-milena.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Nantes Milena',
            'pro_subtitulo' => 'Cenoura Outono/Inverno',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-couve-manteiga.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Manteiga',
            'pro_subtitulo' => 'Couve-Folha',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-chicoria-encantada.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Encantada',
            'pro_subtitulo' => 'Chicória Lisa',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-jilo-comprido-grande-rio.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Comprido Grande Rio',
            'pro_subtitulo' => 'Jiló Comprido',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-abobora-isabella.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Mini Paulista Isabella',
            'pro_subtitulo' => 'Mini Abóbora Butternut Tropical',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-melancia-crimson-select-plus.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Crimson Select Plus',
            'pro_subtitulo' => 'Melancia Crimson',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-melancia-crimson-sweet.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Crimson Sweet',
            'pro_subtitulo' => 'Melancia Crimson',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-maxixe-do-norte.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Do Norte',
            'pro_subtitulo' => 'Maxixe',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-mamao-formosa.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Formosa',
            'pro_subtitulo' => 'Mamão Formosa',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-mamao-ouro.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Ouro',
            'pro_subtitulo' => 'Mamão Solo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-pimentao-amarelo-sf.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Amarelo SF',
            'pro_subtitulo' => 'Pimentão Cônico',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-pimentao-casca-dura-ikeda.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Casca Dura Ikeda',
            'pro_subtitulo' => 'Pimentão Cônico',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-pimentao-rubi.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Rubi',
            'pro_subtitulo' => 'Pimentão Cônico',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-pimentao-derick.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Derick',
            'pro_subtitulo' => 'Pimentão Lamuyo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-pimenta-bico-vermelho.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Bico Vermelho',
            'pro_subtitulo' => 'Pimenta Bico',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-pimenta-malagueta.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Malagueta',
            'pro_subtitulo' => 'Pimenta Malagueta',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-pepino-esmeralda.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Esmeralda Caipira',
            'pro_subtitulo' => 'Pepino Caipira Verde Claro',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-quiabo-santa-cruz.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Santa Cruz47',
            'pro_subtitulo' => 'Quiabo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-rucula-apreciatta.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Apreciatta',
            'pro_subtitulo' => 'Rúcula Folha Larga',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-rabanete-vip-crimson.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Vip Crimson',
            'pro_subtitulo' => 'Rabanete Redondo',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-salsa-lisa.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Lisa',
            'pro_subtitulo' => 'Salsa Lisa',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-tomate-barto.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Bartô',
            'pro_subtitulo' => 'Tomate Determinado Saladete',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-tomate-fascinio.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Fascínio',
            'pro_subtitulo' => 'Tomate Determinado Saladete',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-tomate-cascade.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cascade',
            'pro_subtitulo' => 'Tomate Indeterminado Cereja',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '1',
            'sub_id' => '3',
            'pa_id' => '5',
            'pro_foto' => '23062023-tomate-santa-cruz-kada.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Santa Cruz Kada',
            'pro_subtitulo' => 'Tomate Indeterminado Santa Cruz',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '06072023-abamectin-prentiss.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Abamectin Prentiss',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Abamectin Potenza',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '06072023-abamectin-dva.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Abamectin DVA',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '06072023-abamectin-abamex-18ce-1l.png',
            'pro_foto2' => '06072023-abamectin-abamex-18ce-5l.png',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Abamectin Abamex 18 CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '06072023-actara-250wg-100g.png',
            'pro_foto2' => '06072023-actara-250wg-1kg.png',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Actara  250WG (Tiametoxan)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-alfacipermetrina-fersol.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Alfacipermetrina Fersol',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-bac-control.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Bac-Control (Bacillus Thuringiensis)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Carboran Fersol 350 SC',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-cartap-br500-1kg.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cartap BR 500 (Cloridrato de Cartape) CX12X1',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cipertrin 250',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-connect.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Connect',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Curyom',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-cupinicida-atack-200ce.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cupinicida Atack 200 CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-cypermaster-250ce.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cypermaster 250 CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-cruiser-350fs.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cruiser 350 FS',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-danimen-300ec.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Danimen 300 CE (Fenpropatrina) CX12X1',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-deltamax-25ce.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Deltamax 25 CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '10072023-deltametrina-fersol-25ce.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Deltametrina Fersol 25 CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => 'decis-25ce-250ml.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Deltametrina DECIS 25CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Dimetoato 500 CE Nortox',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Dimilin (Diflubenzuron) - P/ Lagartas',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Dipel WG (Bacillus Thuringiensis)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Dipel (Bacillus Thuringiensis)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-engeo-pleno-1l.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Engeo Pleno',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Endosulfan Nortox (Endossulfam)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Evidence WG 70 (imidacloprido)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Fita pega moscas berguim',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Formicida Atack 200 CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Formicida Atack BIOCARB',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Folisuper 600 BR (Parationa-metilica)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Furadan 350 F',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Furadan 350 SC',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Furadan 50G (Carbofurano) - Sistêmico',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gastoxin Pastilha',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gastoxin Pasta (Fosfeto de Aluminio)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gastoxin B-57',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-granary-700wg.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Granary 700WG',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-imunit.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Imunit',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Keshet 25 CE (Deltametrina)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Klap',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-karate-zeon-250ml.jpg',
            'pro_foto2' => '17072023-karate-zeon-1l.png',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Karate Zeon 50CS (Lambda-cialotrina)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-k-obiol-2p.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'K-OBIOL 2P (Deltametrina)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-k-othrine-sc25.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'K-OTHRINE SC 25',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-klorpan-480ec-1l.jpg',
            'pro_foto2' => '17072023-klorpan-480ec-10l.jpg',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Klorpan 480 EC',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-lankron10.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Lankron 10 ME Lambda-Cialotrina',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Lesmicida Lesmafin',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-lesmicida-metarex-sp-1kg.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Lesmicida Metarex SP',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-lannate-br.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Lannate BR (Metomil)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-malathion-1000-ec.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Malathion 1000 EC Cheminova',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-malatol.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Malatol PO',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Match EC (Lufenuron)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-mentox-600ce.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Mentox 600 CE (Paration Metílico)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Nufos 480 EC',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Óleo de Neen Natuneem',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Orthene (Acefato)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-pounce-384ec.png',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Pounce 384 EC',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Provado 200 SC',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Platinum Neo',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Polo',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Pratico',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Ralzer 350 TS',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Regent 800WG (fipronil)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Starion 25 CE',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Supracid 400 CE - P/ Cochonilhas',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Singular',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Safety',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Tiger 100CE (Piriproxifen) - P/ Cochonilhas Ortézia',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Tracer',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Trigard',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Vexter - Clorpirifos',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-vertimec-18ec-1l.png',
            'pro_foto2' => '17072023-vertimec-18ec-5l.jpg',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Vertimec 18 EC (Abamectina)',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Verdadero',
            'pro_subtitulo' => 'Inseticida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '17072023-assist.jpg',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Assist',
            'pro_subtitulo' => 'Óleo Mineral',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '7',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Oppa BR EC',
            'pro_subtitulo' => 'Óleo Mineral',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Agimix',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Arsenal NA',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Atrazina 500 - ACLAMADO BR',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Atrazina 500 - Gesaprim',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Atrazina Nortox 500 SC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Atrazina Attranex 500SC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Advance (Diuron+hexazinona) CX4X5 PC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Aminol 806 (2,4D)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Basagran (Bentazona)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Boral (Sulfentrazona)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cobra',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Clorim 250 - CLORIMURON - ETÍLICO',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Diuron Nortox 500 SC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'D.M.A 806 (2,4 – D)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Flex (Fomesafem)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Flumyzin',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Fusiflex',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Fusilade',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gallant-R',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gamit 500 CE (Clomazona)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gesapax 500 (ametrina)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gesaprim (Atrasina)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gladium (Ethoxysulfuron) - P/ Tiririca',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato 480 HELM',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Shadow 480',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Gliall 480',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Fersol N.A.',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Atanor',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Biocarb',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato - Icarai',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Nortox',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Trop',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Polaris',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Ryvolt N.A.',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Stinger 480',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Glifosato Trop 480',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gramocil (Diuron+Paraquate)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gramocil',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Gramoxone (Paraquate)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Goal BR',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Imazetapyr Plus Nortox',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Nicosulfuron Nortox 40 SC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Podium EW 110',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Podium S',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Paradox',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Premerlin 600 CE',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Ponteiro (Generico do Boral)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Primoleo',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Primestra Gold (Atrazina+S-metolacloro)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Robust',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Roundup Original (Glifosato)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Roundup Original Mais (Glifosato)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Roundup Transorb (Glifosato)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Roundup WG (Glifosato)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Roundup Ultra',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Reator',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Reglone (Diquat)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Sanson 40 SC (Nicosulfuron)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Sempra (Halosulfuron-metilico)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Sinerge',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Stone (Boral + Diuron)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Tordon (2,4-D + Picloran)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Tordon Ultra S',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Turuna (2,4-D + Picloran)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Tropero',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Tractor (Generico do Dontor)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Trifluralina - Milenia',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'U46 D FLUID',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Velpar K',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Volcane (MSMA)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Zaphir',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '8',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'ZAPP QI 620',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Aliete (FOSETIL)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Amistar 500 WG (Azoxistrobina)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Amistar TOP',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Bayfidan EC 250',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Baytan SC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Bravonil 500 SC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Metiltiofan (Tiofanato-Metilico)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Comet',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cuprogarb 350',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Curzate BR',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cercobin 700 WP (Tiofanato-Metilico)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Cerconil PM (Clorotalonil+Tiofanato-metilico)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Daconil BR (Clorotalonil)',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Dithane',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Elatus',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Icarus 250 EC',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Kocide',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

        DB::table('produtos')->insert([
            'ca_id' => '3',
            'sub_id' => '9',
            'pa_id' => '6',
            'pro_foto' => '',
            'pro_foto2' => '',
            'pro_foto3' => '',
            'pro_foto4' => '',
            'pro_foto5' => '',
            'pro_nome' => 'Mayran',
            'pro_subtitulo' => 'Herbicida',
            'pro_descricao' => 'descricao',
        ]);

    }
}
