<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;


class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPainelAdm(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('painel-adm.contato',[
                'contato' => $contato
            ]);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.contato',[
                'contato' => $contato
            ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function atualizarContato(Request $request, Contato $contato)
    {
        $request->validate([
            'id' => 'nullable',
            'con_endereco' => 'nullable',
            'con_telefone' => 'nullable',
            'con_email' => 'nullable',
        ]);

        $contatoExiste = Contato::count();
        //dd($contatoExiste);
        if ($contatoExiste === 0) {

            Contato::create($request->all());

        } elseif ($contatoExiste = 1) {
            $contato = Contato::all()->first();
            $contato->id = $contato->id;
            $contato->con_endereco = $request->con_endereco;
            $contato->con_telefone = $request->con_telefone;
            $contato->con_email = $request->con_email;

            $contato->update($request->all());

        }

        //dd($contato);
        return redirect()->route('contato')->with('success', 'Página de contato atualizada com sucesso!');

    }

}
