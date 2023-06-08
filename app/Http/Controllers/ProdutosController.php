<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;
use App\Models\Categoria;
use App\Models\SubCategoria;
use App\Models\Produto;
use App\Models\Contato;
use App\Models\FotoProduto;

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
             $produtos = Produto::orderBy('created_at', 'desc')->get();
             return view('painel-adm.produtos.produtos',[
                 'parceiros' => $parceiros,
                 'produtos' => $produtos,
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

            //dd($contato);

            return view('site.defensivos',[
                'contato' => $contato,
                'parceiros' => $parceiros
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

            return view('site.fertilizantes',[
                'contato' => $contato,
                'parceiros' => $parceiros
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

            return view('site.biologicos',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function sementesSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->select('categorias.*', 'parceiros.*')
            ->where('categorias.ca_nome', 'sementes')
            ->get(5);
            //dd($contato);

            return view('site.sementes',[
                'contato' => $contato,
                'parceiros' => $parceiros
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

            return view('site.linhaorganica',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function arrozSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'arroz')
            ->get(5);
            //dd($contato);

            return view('site.arroz',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function milhoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'milho')
            ->get(5);
            //dd($contato);

            return view('site.milho',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function feijaoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'feijao')
            ->get(5);
            //dd($contato);

            return view('site.feijao',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function sojaSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'soja')
            ->get(5);
            //dd($contato);

            return view('site.soja',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function sorgoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'sorgo')
            ->get(5);
            //dd($contato);

            return view('site.sorgo',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function trigoSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'trigo')
            ->get(5);
            //dd($contato);

            return view('site.trigo',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function gramineasSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'gramineas')
            ->get(5);
            //dd($contato);

            return view('site.gramineas',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }

    public function leguminosasSite(Contato $contato)
    {
            $contato = Contato::all()->first();
            $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
            ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
            ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')
            ->where('sub_categorias.sub_nome', 'leguminosas')
            ->get(5);
            //dd($contato);

            return view('site.leguminosas',[
                'contato' => $contato,
                'parceiros' => $parceiros
            ]);

    }
}
