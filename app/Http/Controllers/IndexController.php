<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Sobre;

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

            //dd($sobre);

            return view('index',[
                'contato' => $contato,
                'sobre' => $sobre,
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
