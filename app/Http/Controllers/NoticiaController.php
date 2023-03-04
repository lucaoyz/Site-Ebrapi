<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\FotoNoticia;

use function PHPSTORM_META\map;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPainelAdm( )
    {
        $noticias = Noticia::join('categorias', 'categorias.id', '=', 'noticias.ca_id')
        ->select('categorias.*', 'noticias.*')->orderBy('noticias.created_at', 'desc')->paginate(5);
            return view('painel-adm.noticias.noticias',[
                'noticias' => $noticias,
            ]);

    }

    public function createNoticias()
    {
        $categoriaExiste = Categoria::all()->first();
            $categorias = Categoria::orderBy('ca_nome', 'asc')->get();

            //dd($categoriaExiste);
            return view('painel-adm.noticias.createNoticia',[
                'categorias' => $categorias,
                'categoriaExiste' => $categoriaExiste,
            ]);

    }

    public function storeNoticias(Request $request)
    {
        $request->validate([
            'no_titulo' => 'required',
            'no_corpo' => 'required',
            'ca_id' => 'required',
            'no_data' => 'required|date',
        ]);
        //dd($request);
        $result = Noticia::create($request->all());
        //dd($result);

            return redirect()->route('noticias')
                            ->with('success','Noticia criada com sucesso!');

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
