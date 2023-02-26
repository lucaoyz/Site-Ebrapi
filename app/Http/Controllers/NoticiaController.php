<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Noticia;
use App\Models\FotoNoticia;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPainelAdm( )
    {

            return view('painel-adm.noticias.noticias',[
            ]);

    } 

    public function createNoticias( )
    {

            return view('painel-adm.noticias.createNoticia',[
            ]);

    }

    public function noticiasSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.noticias',[
                'contato' => $contato
            ]);

    }
}
