<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class HistoricoController extends Controller
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

            return view('site.historico',[
                'contato' => $contato
            ]);

    }
}
