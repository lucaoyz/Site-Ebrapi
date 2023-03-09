<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Sobre;
use App\Models\Noticia;


class IndexController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $sobre = Sobre::all()->first();

            $noticias = Noticia::join('categorias', 'categorias.id', '=', 'noticias.ca_id')
            ->select('categorias.*', 'noticias.*')->orderBy('noticias.created_at', 'desc')->paginate(3);

            //dd($sobre);

            return view('index',[
                'contato' => $contato,
                'sobre' => $sobre,
                'noticias' => $noticias,
            ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function erroSite()
    {

            return view('site.404');
    }

}
