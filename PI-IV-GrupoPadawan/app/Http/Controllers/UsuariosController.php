<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Input;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::get();
        return view('usuarios.index', $usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(\Illuminate\Http\Request $request)
    {
        $cargos = Cargo::get();
        return view('usuarios.cadastrar', ['cargos' => $cargos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagem = $request->file('imagem');
        $pasta = public_path() . '/imagens';
        $nome_imagem = 'usuario' . time() . '.' . $imagem->getClientOriginalExtension();

        $nova_imagem = $imagem->move($pasta,$nome_imagem);

        $usuario = new Usuario();
        $usuario->nome = Input::get('nome');
        $usuario->centro_custo = Input::get('centro_custo');
        $usuario->email = Input::get('email');
        $usuario->telefone = Input::get('telefone');
        $usuario['lider_de_fuga'] = (bool)Input::get('lider_de_fuga');
        $usuario['ativo'] = (!isset($usuario['ativo'])) ? 0 : 1;
        $usuario->cargo_id = Input::get('cargo_id');
        $usuario->senha = Input::get('senha');
        $usuario ->imagem = $nome_imagem;
        $usuario->save();
        //$usuario->cargo()->attach(Input::get('cargo_id'));

        return redirect()->route('usuarios.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = Usuario::get()->where('email', $id);
        return ($usuarios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        $cargos = Cargo::get();
        return view('usuarios.editar', [
            'id' => $usuario->id,
            'nome' => $usuario->nome,
            'centro_custo' => $usuario->centro_custo,
            'email' => $usuario->email,
            'telefone' => $usuario->telefone,
            'lider_de_fuga' => $usuario->lider_de_fuga,
            'ativo' => $usuario->ativo,
            'cargo_id' => $usuario->cargo_id,
            'senha' => $usuario->senha,
            'imagem' =>$usuario->imagem,
            'cargo' =>$cargos
        ]);

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
        $imagem = $request->file('novaImagem');
        $pasta = public_path() . '/imagens';
        $nome_imagem = 'usuario' . time() . '.' . $imagem->getClientOriginalExtension();

        $nova_imagem = $imagem->move($pasta, $nome_imagem);

        $usuario = Usuario::find($id);
        $usuario->nome = Input::get('nome');
        $usuario->centro_custo = Input::get('centro_custo');
        $usuario->email = Input::get('email');
        $usuario->telefone = Input::get('telefone');
        $usuario->lider_de_fuga = (bool)Input::get('lider_de_fuga');
        $usuario->ativo = Input::get('ativo');
        $usuario->cargo_id = Input::get('cargo_id');
        $usuario->senha = Input::get('senha');
        $usuario->imagem = $nome_imagem;
        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($usuarios)
    {
        $usuario = Usuario::find($usuarios);
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
