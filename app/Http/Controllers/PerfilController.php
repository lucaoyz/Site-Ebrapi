<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $user = User::all()->first();
        return view('painel-adm.perfil.perfil',[
            'user' => $user
        ]);
    }

    public function alterarSenha(User $user)
    {
        $user = User::all()->first();
        return view('painel-adm.perfil.change-password',[
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function atualizarPerfil(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::all()->first();
        $user->id = $user->id;
        $user->name = $request->name;
        $user->email = $request->email;

        $user->update($request->all());

        //dd($user);
        return redirect()->route('perfil')->with('success', 'Usuário atualizado com sucesso!');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function changePassword(Request $request, User $user)
    {
        # Validation

        $mensagens = [
            'required' => 'Obrigatório!',
            'new_password.min' => 'É necessário no mínimo 8 caracteres na senha!',
            'confirmed' => 'A confirmação de senha não bate!'
        ];

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ], $mensagens);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return redirect()->route('perfil.alterar-senha')->with("error", "As senhas não batem!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

            return redirect()->route('perfil')->with('success','Senha alterada com sucesso!');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
