<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;
use App\Models\Categoria;
use App\Models\SubCategoria;
use Illuminate\Support\Facades\File;

class ParceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexPainelAdm( )
    {

        $parceiros = Parceiro::join('categorias', 'categorias.id', '=', 'parceiros.ca_id')
        ->join('sub_categorias', 'sub_categorias.id', '=', 'parceiros.sub_id')
        ->select('categorias.*', 'sub_categorias.*', 'parceiros.*')->paginate(5);
        $categorias = Categoria::latest()->paginate(5);
        $subcategorias = SubCategoria::latest()->paginate(5);
        //dd($parceiros);
            return view('painel-adm.parceiros.parceiros',[
                'parceiros' => $parceiros,
                'categorias' => $categorias,
                'subcategorias' => $subcategorias,
            ]);

    }

    public function createParceiros( )
    {

        $categoriaExiste = Categoria::all()->first();
            $categorias = Categoria::orderBy('ca_nome', 'asc')->get();

            $subcategorias = SubCategoria::orderBy('sub_nome', 'asc')->get();

            return view('painel-adm.parceiros.createParceiro',[
                'categorias' => $categorias,
                'categoriaExiste' => $categoriaExiste,
                'subcategorias' => $subcategorias,
            ]);

    }

    public function storeParceiros(Request $request)
    {
        $request->validate([
            'ca_id' => 'nullable',
            'sub_id' => 'nullable',
            'pa_nome' => 'required',
            'pa_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,ico|max:5048',
            'pa_link' => 'nullable',
        ]);
        //dd($request);
        $input = $request->all();
        // Upload de imagem
        if ($image = $request->file('pa_logo')) {
            $name=date('dmY') . "-" . $image->getClientOriginalName();
            $image->move(public_path().'/assets/img/parceiros/', $name);
            $input['pa_logo'] = "$name";
        }

        Parceiro::create($input);

            //dd($input);

            return redirect()->route('parceiros')
                            ->with('success','Parceiro criado com sucesso!');

    }

    public function atualizarParceiros(Request $request, Parceiro $parceiro)
    {
        $request->validate([
            'ca_id' => 'nullable',
            'sub_id' => 'nullable',
            'pa_nome' => 'required',
            'pa_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,ico|max:5048',
            'pa_link' => 'nullable',
        ]);

        if($request->hasFile('pa_logo')){
        $image = $request->file('pa_logo');

                $name=date('dmY') . "-" . $image->getClientOriginalName();
                $image->move(public_path().'/assets/img/parceiros/', $name);
                $path = public_path('/assets/img/parceiros/' . $parceiro->pa_logo);
                //dd($path);
                File::delete($path);

                $parceiro->pa_logo = $name;
        }

        $parceiro->id = $request->id;
        $parceiro->ca_id = $request->ca_id;
        $parceiro->sub_id = $request->sub_id;
        $parceiro->pa_nome = $request->pa_nome;
        $parceiro->pa_link = $request->pa_link;

        $parceiro->save();

            return redirect()->route('parceiros')
                        ->with('success', 'Parceiro atualizado com sucesso!');

    }

    public function deleteParceiros(Parceiro $parceiro)
    {
            $path = public_path('assets/img/parceiros/' . $parceiro->pa_logo);
//dd($path);
            File::delete($path);
            $parceiro->delete();
            return redirect()->route('parceiros')
            ->with('success','Parceiro excluido com sucesso!');

    }

}
