<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parceiro;
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

        $parceiros = Parceiro::latest()->paginate(5);

            return view('painel-adm.parceiros.parceiros',[
                'parceiros' => $parceiros,
            ]);

    }

    public function createParceiros( )
    {

            return view('painel-adm.parceiros.createParceiro',[
            ]);

    }

    public function storeParceiros(Request $request)
    {
        $request->validate([
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
