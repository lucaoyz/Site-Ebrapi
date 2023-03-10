<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Sobre;
use App\Models\Noticia;
use App\Models\Parceiro;
use App\Models\FotoNoticia;


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
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            $noticias = Noticia::join('categorias', 'categorias.id', '=', 'noticias.ca_id')
            ->select('categorias.*', 'noticias.*')->orderBy('noticias.no_data', 'desc')->paginate(3);

            //dd($sobre);

            return view('index',[
                'contato' => $contato,
                'parceiros' => $parceiros,
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
        $contato = Contato::all()->first();

        return view('site.404',[
            'contato' => $contato,
        ]);
}

}
