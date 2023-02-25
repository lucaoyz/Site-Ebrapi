<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class NoticiaController extends Controller
{
    public function noticiasSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.noticias',[
                'contato' => $contato
            ]);

    }
}
