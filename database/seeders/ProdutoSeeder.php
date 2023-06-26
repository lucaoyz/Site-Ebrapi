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
            'pa_id' => '1',
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
            'pa_id' => '4',
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
            'pa_id' => '4',
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
            'pa_id' => '4',
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
            'pa_id' => '4',
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
            'pa_id' => '4',
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
            'pa_id' => '4',
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

    }
}
