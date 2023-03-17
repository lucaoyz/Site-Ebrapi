<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Contato;
use App\Models\Noticia;
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
        ->select('categorias.*', 'noticias.*')->orderBy('noticias.created_at', 'desc')->paginate(4);

            return view('painel-adm.noticias.noticias',[
                'noticias' => $noticias,
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

            //dd($categoriaExiste);
            return view('painel-adm.noticias.createNoticia',[
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
            'fn_imagem.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768'
        ]);

        if($request->hasfile('fn_imagem'))
         {

            foreach($request->file('fn_imagem') as $image)
            {
                $name=date('dmY') . "-" . $image->getClientOriginalName();
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
            'no_autor' => 'required',
            'no_corpo' => 'required',
            'no_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'no_data' => 'required|date',
        ]);
        //dd($request);
        $input = $request->all();
        // Upload de imagem
        if ($image = $request->file('no_img')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/fotosNoticias/principal/', $name);
            $input['no_img'] = "$name";
        }

        $noticia = Noticia::create($input);

            //dd($input);

            return redirect()->route('noticias.create.fotoNoticias', $noticia->id)
                            ->with('success','Noticia criada com sucesso!');

    }

    public function atualizarNoticias(Request $request, Noticia $noticia)
    {

        $request->validate([
            'no_titulo' => 'required',
            'no_corpo' => 'required',
            'no_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'no_data' => 'required|date',
        ]);

        if($request->hasFile('no_img')){
        $image = $request->file('no_img');

                $name=date('dmY') . "-" . $image->getClientOriginalName();
                $image->move(public_path().'/assets/img/fotosNoticias/principal/', $name);
                $path = public_path('assets/img/fotosNoticias/principal/' . $noticia->no_img);
                //dd($path);
                File::delete($path);

                $noticia->no_img = $name;
        }

        $noticia->id = $request->id;
        $noticia->no_titulo = $request->no_titulo;
        $noticia->no_autor = $request->no_autor;
        $noticia->no_corpo = $request->no_corpo;
        $noticia->no_data = $request->no_data;

        $noticia->save();

            return redirect()->route('noticias')
                        ->with('success', 'Notícia atualizada com sucesso!');

    }

    public function atualizarFotoNoticias(Request $request, Noticia $noticia, FotoNoticia $FotoNoticia)
    {
        $request->validate([
            'fn_imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
        ]);

        if($request->hasFile('fn_imagem')){
            $image = $request->file('fn_imagem');

                $name=date('dmY') . "-" . $image->getClientOriginalName();
                $image->move(public_path().'/assets/img/fotosNoticias/', $name);
                $path = public_path('assets/img/fotosNoticias/' . $FotoNoticia->fn_imagem);
                //dd($path);
                File::delete($path);
                $FotoNoticia->fn_imagem = $name;
            }
                $FotoNoticia->id = $request->id;
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
            $path = public_path('assets/img/fotosNoticias/principal/' . $noticia->no_img);
//dd($path);
            File::delete($path);
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

    public function noticiaSite(Contato $contato, Noticia $noticia)
    {
            $contato = Contato::all()->first();

            $fotoNoticias = FotoNoticia::join('noticias', 'noticias.id', '=', 'foto_noticias.no_id')
            ->select('noticias.*', 'foto_noticias.*')
            ->where('no_id', '=', $noticia->id)->orderBy('foto_noticias.id', 'asc')->paginate(5);
            //dd($contato);

            return view('site.noticia',[
                'contato' => $contato,
                'noticia' => $noticia,
                'fotoNoticias' => $fotoNoticias,
            ]);

    }

    public function noticiasSite(Contato $contato)
    {
            $contato = Contato::all()->first();

            $noticias = Noticia::join('categorias', 'categorias.id', '=', 'noticias.ca_id')
            ->select('categorias.*', 'noticias.*')->orderBy('noticias.no_data', 'desc')->paginate(6);

            //dd($contato);

            return view('site.noticias',[
                'contato' => $contato,
                'noticias' => $noticias,
            ]);

    }
}
