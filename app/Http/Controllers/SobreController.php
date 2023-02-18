<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Sobre;


class SobreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPainelAdm(Sobre $sobre)
    {
            $sobre = Sobre::all()->first();

            //dd($contato);

            return view('painel-adm.missao',[
                'sobre' => $sobre
            ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSite()
    {
            $contato = Contato::all()->first();
            $sobre = Sobre::all()->first();

            //dd($contato);

            return view('site.sobre',[
                'contato' => $contato,
                'sobre' => $sobre,
            ]);

    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function atualizarMissao(Request $request, Sobre $sobre)
    {
        $request->validate([
            'id' => 'nullable',
            'sob_sobre' => 'nullable',
            'sob_missao' => 'nullable',
        ]);

        $sobreExiste = Sobre::count();
        //dd($sobreExiste);
        if ($sobreExiste === 0) {

            Sobre::create($request->all());

        } elseif ($sobreExiste = 1) {
            $sobre = Sobre::all()->first();
            $sobre->id = $sobre->id;
            $sobre->sob_sobre = $request->sob_sobre;
            $sobre->sob_missao = $request->sob_missao;

            $sobre->update($request->all());

        }

        //dd($sobre);
        return redirect()->route('missao')->with('success', 'Página sobre atualizada com sucesso!');

    }
}
