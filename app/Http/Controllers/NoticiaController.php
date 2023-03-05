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

    public function createFotoNoticias(Noticia $noticia)
    {

            return view('painel-adm.noticias.createFotoNoticia',[
                'noticia' => $noticia,
            ]);

    }

    public function storeFotoNoticias(Request $request, Noticia $noticia)
    {

        $this->validate($request, [
            'fn_imagem' => 'required',
            'fn_imagem.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if($request->hasfile('fn_imagem'))
         {

            foreach($request->file('fn_imagem') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'assets/img/fotosNoticias/', $name);
                $data[] = $name;
            }
         }

         $jsonstr = $data;
            $ar = json_decode($jsonstr,true); # json string to Array
            $obj = json_decode($jsonstr); # json string to Object
            var_dump($ar,$obj);

         $fotoNoticia= new FotoNoticia();
         $fotoNoticia->fn_imagem = json_decode($data);
         $fotoNoticia->no_id = $noticia->id;

        $fotoNoticia->save();

        return redirect()->route('noticias')
        ->with('success', 'Suas imagens foram adicionadas com sucesso!');

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
        $noticia = Noticia::create($request->all());
        //dd($result);

            return redirect()->route('noticias.create.fotoNoticias', $noticia->id)
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
