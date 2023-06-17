<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;
use App\Models\Categoria;
use App\Models\SubCategoria;
use App\Models\Produto;
use App\Models\Contato;
use Illuminate\Support\Facades\File;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function indexPainelAdm()
     {
             $parceiros = Parceiro::orderBy('created_at', 'desc')->get();
             $produtos = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
             ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
             ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
             ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')->paginate(5);

             $categorias = Categoria::latest()->get();
             $subcategorias = SubCategoria::orderBy('created_at', 'desc')->get();

             //dd($subcategorias);
             return view('painel-adm.produtos.produtos',[
                 'parceiros' => $parceiros,
                 'produtos' => $produtos,
                 'categorias' => $categorias,
                 'subcategorias' => $subcategorias,
             ]);

     }


     public function createProdutos()
     {

        $categoriaExiste = Categoria::all()->first();
        $categorias = Categoria::orderBy('ca_nome', 'asc')->get();
        $parceiros = Parceiro::orderBy('pa_nome', 'asc')->get();
        $parceiroExiste = Categoria::all()->first();
        $subcategorias = SubCategoria::orderBy('sub_nome', 'asc')->get();

        return view('painel-adm.produtos.createProdutos',[
            'categorias' => $categorias,
            'categoriaExiste' => $categoriaExiste,
            'parceiros' => $parceiros,
            'parceiroExiste' => $parceiroExiste,
            'subcategorias' => $subcategorias,
        ]);

     }

     public function createFotoProduto(Produto $produto)
     {

             return view('painel-adm.produtos.createFotoProduto',[
                 'produto' => $produto,
             ]);

     }

    public function storeProdutos(Request $request)
    {
        $request->validate([
            'ca_id' => 'nullable',
            'sub_id' => 'nullable',
            'pa_id' => 'nullable',
            'pro_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_nome' => 'required',
            'pro_subtitulo' => 'nullable',
            'pro_descricao' => 'nullable',
        ]);
        //dd($request);
        $input = $request->all();
        // Upload de imagem
        if ($image = $request->file('pro_foto')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/fotosProdutos/', $name);
            $input['pro_foto'] = "$name";
        }

        if ($image = $request->file('pro_foto2')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/fotosProdutos/', $name);
            $input['pro_foto2'] = "$name";
        }

        if ($image = $request->file('pro_foto3')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/fotosProdutos/', $name);
            $input['pro_foto3'] = "$name";
        }

        if ($image = $request->file('pro_foto4')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/fotosProdutos/', $name);
            $input['pro_foto4'] = "$name";
        }

        if ($image = $request->file('pro_foto5')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/fotosProdutos/', $name);
            $input['pro_foto5'] = "$name";
        }

        $produto = Produto::create($input);

            //dd($input);

            return redirect()->route('produtos')
                            ->with('success','Produto criado com sucesso!');

    }

    public function atualizarProdutos(Request $request, Produto $produto)
    {

        $request->validate([
            'ca_id' => 'nullable',
            'sub_id' => 'nullable',
            'pa_id' => 'nullable',
            'pro_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_foto5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_nome' => 'required',
            'pro_subtitulo' => 'nullable',
            'pro_descricao' => 'nullable',
        ]);

        if($request->hasFile('pro_foto')){
        $image = $request->file('pro_foto');

                $name=date('dmY') . "-" . $image->getClientOriginalName();
                $image->move(public_path().'/assets/img/fotosProdutos/', $name);
                $path = public_path('assets/img/fotosProdutos/' . $produto->pro_foto);
                //dd($path);
                File::delete($path);

                $produto->pro_foto = $name;
        }

        if($request->hasFile('pro_foto2')){
            $image = $request->file('pro_foto2');

                    $name=date('dmY') . "-" . $image->getClientOriginalName();
                    $image->move(public_path().'/assets/img/fotosProdutos/', $name);
                    $path = public_path('assets/img/fotosProdutos/' . $produto->pro_foto2);
                    //dd($path);
                    File::delete($path);

                    $produto->pro_foto2 = $name;
        }

        if($request->hasFile('pro_foto3')){
            $image = $request->file('pro_foto3');

                    $name=date('dmY') . "-" . $image->getClientOriginalName();
                    $image->move(public_path().'/assets/img/fotosProdutos/', $name);
                    $path = public_path('assets/img/fotosProdutos/' . $produto->pro_foto3);
                    //dd($path);
                    File::delete($path);

                    $produto->pro_foto3 = $name;
            }

            if($request->hasFile('pro_foto4')){
                $image = $request->file('pro_foto4');

                        $name=date('dmY') . "-" . $image->getClientOriginalName();
                        $image->move(public_path().'/assets/img/fotosProdutos/', $name);
                        $path = public_path('assets/img/fotosProdutos/' . $produto->pro_foto4);
                        //dd($path);
                        File::delete($path);

                        $produto->pro_foto4 = $name;
            }

            if($request->hasFile('pro_foto5')){
                $image = $request->file('pro_foto5');

                        $name=date('dmY') . "-" . $image->getClientOriginalName();
                        $image->move(public_path().'/assets/img/fotosProdutos/', $name);
                        $path = public_path('assets/img/fotosProdutos/' . $produto->pro_foto5);
                        //dd($path);
                        File::delete($path);

                        $produto->pro_foto5 = $name;
            }

        $produto->id = $request->id;
        $produto->ca_id = $request->ca_id;
        $produto->sub_id = $request->sub_id;
        $produto->pa_id = $request->pa_id;
        $produto->pro_nome = $request->pro_nome;
        $produto->pro_subtitulo = $request->pro_subtitulo;
        $produto->pro_descricao = $request->pro_descricao;

        $produto->save();

            return redirect()->route('produtos')
                        ->with('success', 'Produto atualizada com sucesso!');

    }

    public function deleteProdutos(Produto $produto)
    {
            $path = public_path('assets/img/fotosProdutos/' . $produto->pro_foto);
            File::delete($path);

            $path2 = public_path('assets/img/fotosProdutos/' . $produto->pro_foto2);
            File::delete($path2);

            $path3 = public_path('assets/img/fotosProdutos/' . $produto->pro_foto3);
            File::delete($path3);

            $path4 = public_path('assets/img/fotosProdutos/' . $produto->pro_foto4);
            File::delete($path4);

            $path5 = public_path('assets/img/fotosProdutos/' . $produto->pro_foto5);
            File::delete($path5);

            $produto->delete();
            
            return redirect()->route('produtos')
            ->with('success','Produto excluido com sucesso!');

    }

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

            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->select('categorias.*', 'parceiros.*')
            ->where('categorias.ca_nome', 'Defensivos Agricolas')
            ->get(5);

            $Inseticidas = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'Inseticidas')
            ->get();

            $Herbicidas = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'Herbicidas')
            ->get();

            $Fungicidas = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'Fungicidas')
            ->get();

            $Acaricidas = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'Acaricidas')
            ->get();

            return view('site.defensivos',[
                'contato' => $contato,
                'parceiros' => $parceiros,
                'Inseticidas' => $Inseticidas,
                'Herbicidas' => $Herbicidas,
                'Fungicidas' => $Fungicidas,
                'Acaricidas' => $Acaricidas,
            ]);

    }

    public function fertilizantesSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->select('categorias.*', 'parceiros.*')
            ->where('categorias.ca_nome', 'Fertilizantes')
            ->get(5);
            //dd($contato);

            $produtos = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('categorias.ca_nome', 'Fertilizantes')
            ->get();

            return view('site.fertilizantes',[
                'contato' => $contato,
                'parceiros' => $parceiros,
                'produtos' => $produtos,
            ]);

    }

    public function biologicosSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->select('categorias.*', 'parceiros.*')
            ->where('categorias.ca_nome', 'biologicos')
            ->get(5);
            //dd($contato);

            $microbiologicos = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'microbiologicos')
            ->get();

            $feromonios = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'feromonios')
            ->get();

            $armadilhas = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'armadilhas')
            ->get();

            return view('site.biologicos',[
                'contato' => $contato,
                'parceiros' => $parceiros,
                'microbiologicos' => $microbiologicos,
                'feromonios' => $feromonios,
                'armadilhas' => $armadilhas,
            ]);

    }

    public function sementesSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->select('categorias.*', 'parceiros.*')
            ->where('categorias.ca_nome', 'sementes')
            ->get(5);

            $produtos = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('categorias.ca_nome', 'sementes')
            ->get();
            //dd($contato);

            $graos = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'Graos')
            ->get();

            $forrageiras = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'Forrageiras e Adubacao Verde')
            ->get();


            $Hortalicas = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('sub_categorias.sub_nome', 'Hortalicas')
            ->get();
            //dd($Hortalicas);
            return view('site.sementes',[
                'contato' => $contato,
                'parceiros' => $parceiros,
                'produtos' => $produtos,
                'graos' => $graos,
                'forrageiras' => $forrageiras,
                'Hortalicas' => $Hortalicas,
            ]);

    }

    public function linhaorganicaSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->select('categorias.*', 'parceiros.*')
            ->where('categorias.ca_nome', 'Linha Orgânica')
            ->get(5);
            //dd($contato);

            $produtos = Produto::join('categorias', 'categorias.id', '=', 'produtos.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'produtos.sub_id')
            ->join('parceiros', 'parceiros.id', '=', 'produtos.pa_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*', 'produtos.*')
            ->where('categorias.ca_nome', 'Linha Orgânica')
            ->get();

            return view('site.linhaorganica',[
                'contato' => $contato,
                'parceiros' => $parceiros,
                'produtos' => $produtos,
            ]);

    }
}
