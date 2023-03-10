<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Contato;
use App\Models\Noticia;
use App\Models\Categoria;
use App\Models\FotoNoticia;
use Illuminate\Support\Facades\File;

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

        $categorias = Categoria::latest()->paginate(5);
            return view('painel-adm.noticias.noticias',[
                'noticias' => $noticias,
                'categorias' => $categorias,
            ]);

    }

    public function fotoNoticiaIndex(Noticia $noticia)
    {
        $fotoNoticias = FotoNoticia::join('noticias', 'noticias.id', '=', 'foto_noticias.no_id')
        ->select('noticias.*', 'foto_noticias.*')
        ->where('no_id', '=', $noticia->id)->orderBy('foto_noticias.id', 'asc')->paginate(5);
        //dd($fotoNoticias);

            return view('painel-adm.noticias.fotoNoticias',[
                'noticia' => $noticia,
                'fotoNoticias' => $fotoNoticias,
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
                $image->move(public_path().'/assets/img/fotosNoticias/', $name);

                $fotoNoticia= new FotoNoticia();
                $fotoNoticia->fn_imagem = $name;
                $fotoNoticia->no_id = $noticia->id;

               $fotoNoticia->save();
            }
         }

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

    public function atualizarNoticias(Request $request, Noticia $noticia)
    {

        $request->validate([
            'no_titulo' => 'required',
            'no_corpo' => 'required',
            'ca_id' => 'required',
            'no_data' => 'required|date',
        ]);

        $noticia->id = $request->id;
        $noticia->no_titulo = $request->no_titulo;
        $noticia->no_corpo = $request->no_corpo;
        $noticia->ca_id = $request->ca_id;
        $noticia->no_data = $request->no_data;

        $noticia->save();

            return redirect()->route('noticias')
                        ->with('success', 'Notícia atualizada com sucesso!');

    }

    public function atualizarFotoNoticias(Request $request, Noticia $noticia, FotoNoticia $FotoNoticia)
    {
        $request->validate([
            'fn_imagem' => 'required',
            'fn_imagem.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

            $image = $request->file('fn_imagem');

                $name=$image->getClientOriginalName();
                $image->move(public_path().'/assets/img/fotosNoticias/', $name);
                $path = public_path('assets/img/fotosNoticias/' . $FotoNoticia->fn_imagem);
                //dd($path);
                File::delete($path);

                $FotoNoticia->id = $request->id;
                $FotoNoticia->fn_imagem = $name;
                $FotoNoticia->no_id = $noticia->id;

               $FotoNoticia->save();


            return redirect()->route('noticias.fotoNoticia', $noticia->id)
                        ->with('success', 'Imagem da notícia atualizada com sucesso!');

    }

    public function deleteNoticias(Noticia $noticia)
    {
        $existeFotoNoticia = FotoNoticia::where('no_id', '=', $noticia->id)->first();
        //dd($existeFotoNoticia);
        if(empty($existeFotoNoticia)){
            $noticia->delete();
            return redirect()->route('noticias')
            ->with('success','Noticia excluida com sucesso!');
        } else {
            return redirect()->route('noticias')
            ->with('error','Você precisa limpar as imagens da notícia antes de exclui-la!');
        }

    }

    public function deleteFotoNoticias(Noticia $noticia, FotoNoticia $FotoNoticia)
    {

        $path = public_path('assets/img/fotosNoticias/' . $FotoNoticia->fn_imagem);
//dd($path);
            File::delete($path);

            $FotoNoticia->delete();

            return redirect()->route('noticias.fotoNoticia', $noticia->id)
            ->with('success','Imagem da notícia excluida com sucesso!');

    }


    public function limparFotoNoticias(Noticia $noticia)
    {
        $FotoNoticia = FotoNoticia::where('no_id', '=', $noticia->id)->get();
        //dd($existeFotoNoticia);

            $FotoNoticia->each->delete();
            return redirect()->route('noticias')
            ->with('success','Fotos limpas com sucesso!');

    }

    public function noticiasSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            //dd($contato);

            return view('site.noticias',[
                'contato' => $contato,
            ]);

    }
}
