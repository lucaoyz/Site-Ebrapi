<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.produtos',[
                'contato' => $contato
            ]);

    }

    public function defensivosSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.defensivos',[
                'contato' => $contato
            ]);

    }

    public function fertilizantesSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.fertilizantes',[
                'contato' => $contato
            ]);

    }

    public function biologicosSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.biologicos',[
                'contato' => $contato
            ]);

    }

    public function sementesSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.sementes',[
                'contato' => $contato
            ]);

    }
}
