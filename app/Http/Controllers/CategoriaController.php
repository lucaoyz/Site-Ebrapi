<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

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

        $categoriaNome = Categoria::where('ca_nome', '=', $request->input('ca_nome'))->first();

        if($categoriaNome){
            return redirect()->route('categoria')
            ->with('error', 'Essa categoria já existe!');
        } else {
            $request->validate([
                'ca_nome' => 'required',
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
        $nomeCategoria = Categoria::where('ca_nome', '=', $request->input('ca_nome'))->first();
        $categoriaId = Categoria::where('id', '=', $request->input('id'))->first();

        if($nomeCategoria){
            if($nomeCategoria->ca_nome != $categoriaId->ca_nome){
                return redirect()->route('categoria')
                                    ->with('error', 'Essa categoria já está cadastrada!');
            } else {
                $request->validate([
                    'ca_nome' => 'required',
                ]);

                $categoria->id = $request->id;
                $categoria->ca_nome = $request->ca_nome;

                $categoria->save();

                    return redirect()->route('categoria')
                                ->with('success', 'Categoria atualizada!');
            }
        } else {
            $request->validate([
                'ca_nome' => 'required',
            ]);

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
        $categoria->delete();

        return redirect()->route('categoria')
                        ->with('success','Categoria excluida com sucesso!');
    }

    public function searchCategoria(Request $request)
    {

        $filters = $request->except('_token');
        $categorias = Categoria::where('ca_nome', 'LIKE', "%{$request->search}%")
            ->paginate(5);

            return view('painel-adm.noticias.categoria', [
                'categorias' => $categorias,
                ]);
    }

}
