<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Noticia;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPainelAdm( )
    {
        $categorias = Categoria::latest()->paginate(5);
            return view('painel-adm.noticias.categoria',[
                'categorias' => $categorias,
            ]);

    }

    public function storeCategoria(Request $request)
    {
        $categoriaNomeTipo = Categoria::where('ca_nome', '=', $request->input('ca_nome'))->where('ca_tipo', '=', $request->input('ca_tipo'))->first();
        //dd($categoriaNomeTipo);

        if($categoriaNomeTipo){
            return redirect()->route('categoria')
            ->with('error', 'Essa categoria já existe!');
        } else {
            $request->validate([
                'ca_nome' => 'required',
                'ca_tipo' => 'required',
            ]);

            Categoria::create($request->all());

            return redirect()->route('categoria')
                            ->with('success','Categoria criada com sucesso!');
        }
    }

        /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoria  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function atualizarCategoria(Request $request, Categoria $categoria)
    {
        $request->validate([
            'ca_nome' => 'required',
            'ca_tipo' => 'required',
        ]);

        $inputTipo = $request->ca_tipo;
        $nomeCategoria = Categoria::where('ca_nome', '=', $request->input('ca_nome'))->first();
        $categoriaId = Categoria::where('id', '=', $request->input('id'))->first();

        $existeNomeNoticia = Categoria::where('ca_nome', '=', $request->input('ca_nome'))
        ->where('ca_tipo', '=', 'noticias')->first();

        $existeNomeProdutos = Categoria::where('ca_nome', '=', $request->input('ca_nome'))
        ->where('ca_tipo', '=', 'produtos')->first();
        //dd($inputTipo);
        if($nomeCategoria){
            if($inputTipo == 'noticias'){
                if($existeNomeNoticia){
                    if($existeNomeNoticia->id != $categoriaId->id){
                        return redirect()->route('categoria')
                        ->with('error', 'Essa categoria já está cadastrada!');
                    } else {
                        $categoria->id = $request->id;
                        $categoria->ca_nome = $request->ca_nome;
                        $categoria->ca_tipo = $request->ca_tipo;

                        $categoria->save();

                            return redirect()->route('categoria')
                                        ->with('success', 'Categoria atualizada!');
                    }
                } else {
                    $categoria->id = $request->id;
                    $categoria->ca_nome = $request->ca_nome;
                    $categoria->ca_tipo = $request->ca_tipo;

                    $categoria->save();

                        return redirect()->route('categoria')
                                    ->with('success', 'Categoria atualizada!');
                }
            } elseif($inputTipo == 'produtos'){
                if($existeNomeProdutos){
                    if($existeNomeProdutos->id != $categoriaId->id){
                        return redirect()->route('categoria')
                        ->with('error', 'Essa categoria já está cadastrada!');
                    } else {
                        $categoria->id = $request->id;
                        $categoria->ca_nome = $request->ca_nome;
                        $categoria->ca_tipo = $request->ca_tipo;

                        $categoria->save();

                            return redirect()->route('categoria')
                                        ->with('success', 'Categoria atualizada!');
                    }
                } else {
                    $categoria->id = $request->id;
                    $categoria->ca_nome = $request->ca_nome;
                    $categoria->ca_tipo = $request->ca_tipo;

                    $categoria->save();

                        return redirect()->route('categoria')
                                    ->with('success', 'Categoria atualizada!');
                }
            }
            /* if($nomeCategoria->ca_nome != $categoriaId->ca_nome){
                return redirect()->route('categoria')
                                    ->with('error', 'Essa categoria já está cadastrada!');
            } else {

                $categoria->id = $request->id;
                $categoria->ca_nome = $request->ca_nome;
                $categoria->ca_tipo = $request->ca_tipo;

                $categoria->save();

                    return redirect()->route('categoria')
                                ->with('success', 'Categoria atualizada!');
            } */
        } else {

            $categoria->update($request->all());

                return redirect()->route('categoria')
                            ->with('success', 'Categoria atualizada!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $equipamento
     * @return \Illuminate\Http\Response
     */
    public function deleteCategoria(Categoria $categoria)
    {
        $noticiaUsa = Noticia::where('ca_id' , '=', $categoria->id)->first();
        // Fazer a verificação se produtos está utilizando $produtoUsa = Produto::where('' , '=', $categoria->id)->first();

        //dd($noticiaUsa);
        if(empty($noticiaUsa)){
        $categoria->delete();
        return redirect()->route('categoria')
        ->with('success','Categoria excluida com sucesso!');
        } else {
            return redirect()->route('categoria')
            ->with('error','Categoria sendo usada por outras notícias, remova as notícias para exclui-la!');
        }
    }

    public function searchCategoria(Request $request)
    {

        $filters = $request->except('_token');
        $categorias = Categoria::where('ca_tipo', 'LIKE', "%{$request->search}%")
            ->paginate(5);

            return view('painel-adm.noticias.categoria', [
                'categorias' => $categorias,
                ]);
    }

}
