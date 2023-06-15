<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;
use App\Models\Categoria;
use App\Models\SubCategoria;
use App\Models\Produto;
use App\Models\Contato;
use App\Models\FotoProduto;
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

             $categorias = Categoria::latest()->paginate(5);
             $subcategorias = SubCategoria::latest()->paginate(5);

             return view('painel-adm.produtos.produtos',[
                 'parceiros' => $parceiros,
                 'produtos' => $produtos,
                 'categorias' => $categorias,
                 'subcategorias' => $subcategorias,
             ]);

     }

     public function fotoProdutoIndex(Produto $produto)
     {
         $fotoProdutos = FotoProduto::join('produtos', 'produtos.id', '=', 'foto_produtos.pro_id')
         ->select('produtos.*', 'foto_produtos.*')
         ->where('pro_id', '=', $produto->id)->orderBy('foto_produtos.id', 'asc')->paginate(5);
         //dd($fotoProduto);

             return view('painel-adm.produtos.fotoProduto',[
                 'produto' => $produto,
                 'fotoProdutos' => $fotoProdutos,
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

     public function storeFotoProduto(Request $request, Produto $produto)
    {

        $this->validate($request, [
            'fp_imagem' => 'required',
            'fp_imagem.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768'
        ]);

        if($request->hasfile('fp_imagem'))
         {

            foreach($request->file('fp_imagem') as $image)
            {
                $name=date('dmY') . "-" . $image->getClientOriginalName();
                $image->move(public_path().'/assets/img/fotosProdutos/', $name);

                $fotoProduto= new FotoProduto();
                $fotoProduto->fp_imagem = $name;
                $fotoProduto->pro_id = $produto->id;

               $fotoProduto->save();
            }
         }

        return redirect()->route('produtos')
        ->with('success', 'Suas imagens foram adicionadas com sucesso!');

    }

    public function storeProdutos(Request $request)
    {
        $request->validate([
            'ca_id' => 'nullable',
            'sub_id' => 'nullable',
            'pa_id' => 'nullable',
            'pro_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_nome' => 'required',
            'pro_subtitulo' => 'nullable',
            'pro_descricao' => 'nullable',
        ]);
        //dd($request);
        $input = $request->all();
        // Upload de imagem
        if ($image = $request->file('pro_foto')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/fotosProdutos/principal/', $name);
            $input['pro_foto'] = "$name";
        }

        $produto = Produto::create($input);

            //dd($input);

            return redirect()->route('produtos.create.fotoProduto', $produto->id)
                            ->with('success','Produto criada com sucesso!');

    }

    public function atualizarProdutos(Request $request, Produto $produto)
    {

        $request->validate([
            'ca_id' => 'nullable',
            'sub_id' => 'nullable',
            'pa_id' => 'nullable',
            'pro_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
            'pro_nome' => 'required',
            'pro_subtitulo' => 'nullable',
            'pro_descricao' => 'nullable',
        ]);

        if($request->hasFile('pro_foto')){
        $image = $request->file('pro_foto');

                $name=date('dmY') . "-" . $image->getClientOriginalName();
                $image->move(public_path().'/assets/img/fotosProdutos/principal/', $name);
                $path = public_path('assets/img/fotosProdutos/principal/' . $produto->pro_foto);
                //dd($path);
                File::delete($path);

                $produto->pro_foto = $name;
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

    public function atualizarFotoProduto(Request $request, Produto $produto, FotoProduto $FotoProduto)
    {
        $request->validate([
            'fp_imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048|dimensions:min_width=1024,min_height=768',
        ]);

        if($request->hasFile('fp_imagem')){
            $image = $request->file('fp_imagem');

                $name=date('dmY') . "-" . $image->getClientOriginalName();
                $image->move(public_path().'/assets/img/fotosProdutos/', $name);
                $path = public_path('assets/img/fotosProdutos/' . $FotoProduto->fp_imagem);
                //dd($path);
                File::delete($path);
                $FotoProduto->fp_imagem = $name;
            }
                $FotoProduto->id = $request->id;
                $FotoProduto->pro_id = $produto->id;

               $FotoProduto->save();


            return redirect()->route('produtos.fotoProduto', $produto->id)
                        ->with('success', 'Imagem do produto atualizada com sucesso!');

    }

    public function deleteProdutos(Produto $produto)
    {
        $existeFotoProduto = FotoProduto::where('pro_id', '=', $produto->id)->first();
        //dd($existeFotoNoticia);
        if(empty($existeFotoProduto)){
            $path = public_path('assets/img/fotosProdutos/principal/' . $produto->no_img);
//dd($path);
            File::delete($path);
            $produto->delete();
            return redirect()->route('produtos')
            ->with('success','Produto excluido com sucesso!');
        } else {
            return redirect()->route('produtos')
            ->with('error','Você precisa limpar as imagens do produto antes de exclui-la!');
        }

    }

    public function deleteFotoProduto(Produto $produto, FotoProduto $FotoProduto)
    {

        $path = public_path('assets/img/fotosProdutos/' . $FotoProduto->fp_imagem);
//dd($path);
            File::delete($path);

            $FotoProduto->delete();

            return redirect()->route('produtos.fotoProduto', $produto->id)
            ->with('success','Imagem do produto excluida com sucesso!');

    }


    public function limparFotoProduto(Produto $produto)
    {
        $FotoProduto = FotoProduto::where('pro_id', '=', $produto->id)->get();
        //dd($existeFotoNoticia);

            $FotoProduto->each->delete();
            return redirect()->route('produtos')
            ->with('success','Fotos limpas com sucesso!');

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

            
            return view('site.defensivos',[
                'contato' => $contato,
                'parceiros' => $parceiros,
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
