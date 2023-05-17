<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\SubCategoria;

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
            return view('painel-adm.categorias.categoria',[
                'categorias' => $categorias,
            ]);

    }

    public function SubCategoria(Categoria $categoria)
    {
        $subcategorias = SubCategoria::join('categorias', 'categorias.id', '=', 'sub_categorias.ca_id')
        ->where('ca_id', $categoria->id)
        ->select('categorias.*', 'sub_categorias.*')
        ->orderBy('sub_categorias.id', 'desc')->paginate(5);

        $categoriaNome = $categoria->ca_nome;

            return view('painel-adm.categorias.subcategoria',[
                'categoria' => $categoria,
                'subcategorias' => $subcategorias,
                'categoriaNome' => $categoriaNome,
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

    public function storeSubCategoria(Request $request, Categoria $categoria)
    {

        $subcategoriaNome = SubCategoria::where('sub_nome', '=', $request->input('sub_nome'))->first();

        if($subcategoriaNome){
            return redirect()->route('subcategoria', $categoria->id)
            ->with('error', 'Essa sub-categoria já existe!');
        } else {
            $request->validate([
                'sub_nome' => 'required',
            ]);

            $input = $request->all();
            $input['ca_id'] = $categoria->id;

            SubCategoria::create($input);

            return redirect()->route('subcategoria', $categoria->id)
                            ->with('success','Sub-Categoria criada com sucesso!');
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

    public function atualizarSubCategoria(Request $request, Categoria $categoria, SubCategoria $subcategoria)
    {
        $subnomeCategoria = SubCategoria::where('sub_nome', '=', $request->input('sub_nome'))->first();
        $SubcategoriaId = SubCategoria::where('id', '=', $request->input('id'))->first();

        if($subnomeCategoria){
            if($subnomeCategoria->sub_nome != $SubcategoriaId->sub_nome){
                return redirect()->route('subcategoria', $categoria->id)
                                    ->with('error', 'Essa sub-categoria já está cadastrada!');
            } else {
                $request->validate([
                    'sub_nome' => 'required',
                ]);

                $subcategoria->id = $request->id;
                $subcategoria->sub_nome = $request->sub_nome;

                $subcategoria->save();

                    return redirect()->route('subcategoria', $categoria->id)
                                ->with('success', 'Sub-Categoria atualizada!');
            }
        } else {
            $request->validate([
                'sub_nome' => 'required',
            ]);

            $subcategoria->update($request->all());

                return redirect()->route('subcategoria', $categoria->id)
                            ->with('success', 'Sub-Categoria atualizada!');
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
        //$noticiaUsa = Noticia::where('ca_id' , '=', $categoria->id)->first();
        //dd($noticiaUsa);
        //if(empty($noticiaUsa)){
        $categoria->delete();
        return redirect()->route('categoria')
        ->with('success','Categoria excluida com sucesso!');
        //} else {
        //    return redirect()->route('categoria')
        //    ->with('error','Categoria sendo usada por outras notícias, remova as notícias para exclui-la!');
        //}
    }

    public function deleteSubCategoria(Categoria $categoria, SubCategoria $subCategoria)
    {
        //$noticiaUsa = Noticia::where('ca_id' , '=', $categoria->id)->first();
        //dd($noticiaUsa);
        //if(empty($noticiaUsa)){
        $subCategoria->delete();
        return redirect()->route('subcategoria', $categoria->id)
        ->with('success','Sub-Categoria excluida com sucesso!');
        //} else {
        //    return redirect()->route('categoria')
        //    ->with('error','Categoria sendo usada por outras notícias, remova as notícias para exclui-la!');
        //}
    }

}
