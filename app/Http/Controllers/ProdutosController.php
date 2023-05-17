<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;
use App\Models\Categoria;
use App\Models\SubCategoria;
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
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.produtos',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function defensivosSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.defensivos',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function fertilizantesSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.fertilizantes',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function biologicosSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.biologicos',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function sementesSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.sementes',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function linhaorganicaSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.linhaorganica',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function arrozSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.arroz',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function milhoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.milho',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function feijaoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.feijao',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function sojaSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.soja',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function sorgoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.sorgo',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function trigoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.trigo',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function gramineasSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.gramineas',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function leguminosasSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::orderBy('created_at', 'desc')->get();

            //dd($contato);

            return view('site.leguminosas',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }
}
