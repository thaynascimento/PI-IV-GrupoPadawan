<?php

namespace App\Http\Controllers\Api;

use DB;
use APP\Quotation;
use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
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
        $usuario = new Usuario();
        $usuario->nome = Input::get('nome');
        $usuario->centro_custo = Input::get('centro_custo');
        $usuario->email = Input::get('email');
        $usuario->telefone = Input::get('telefone');
        $usuario['lider_de_fuga'] = (!isset($cargo['lider_de_fuga'])) ? 0 : 1;
        $usuario['ativo'] = (!isset($cargo['ativo'])) ? 1 : 0;
        $usuario->cargo_id = Input::get('cargo_id');
        $usuario->senha = Input::get('senha');
        $usuario->save();
        $usuario->cargos()->attach(Input::get('cargo_id'));

        return $usuario;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$usuarios = Usuario::get()->where('email', $id);
        return response()->json($usuarios);*/

        $usuarios = DB::table('usuarios')->where('email', $id)->first();
        $aux = $usuarios->id;
        $usuarios = Usuario::find($aux);
         return $usuarios;

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
    public function update(Request $request, $id){
        $usuario = Telefone::find($id);

        if($usuario){
            $usuario->nome = Input::get('nome');
            $usuario->centro_custo = Input::get('centro_custo');
            $usuario->email = Input::get('email');
            $usuario->telefone = Input::get('telefone');
            $usuario->lider_de_fuga = (bool)Input::get('lider_de_fuga');
            $usuario->ativo = Input::get('ativo');
            $usuario->cargo_id = Input::get('cargo_id');
            $usuario->senha = Input::get('senha');
            $usuario->save();

            return $usuario;
        }
        return response()->json([
            'erro' => 'Usuário inexistente!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $usuario = Usuario::find($id);

        if($usuario){
            $usuario->delete();
            return response()->json([
                'mensagem' => 'Usuário excluido!'
            ]);
        }
        return response()->json([
            'erro' => 'Usuário inexistente!'
        ]);
    }
}
