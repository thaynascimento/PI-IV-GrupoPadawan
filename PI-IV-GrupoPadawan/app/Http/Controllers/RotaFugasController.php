<?php

namespace App\Http\Controllers;

use App\RotaFuga;
use App\Sala;
use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Input;

class RotaFugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rotafugas = RotaFuga::get();
        return view('rotafugas.index', $rotafugas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(\Illuminate\Http\Request $request)
    {
        $salas = Sala::get();
        return view('rotafugas.cadastrar', ['salas' => $salas]);
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
        $nome_imagem = 'rota' . time() . '.' . $imagem->getClientOriginalExtension();

        $nova_imagem = $imagem->move($pasta,$nome_imagem);

        $rotafugas = new RotaFuga();
        $rotafugas->descricao = Input::get('descricao');
        $rotafugas['ativo'] = (!isset($salas['ativo'])) ? 1 : 0;
        $rotafugas->sala_id = Input::get('sala_id');
        $rotafugas ->imagem = $nome_imagem;
        $rotafugas->save();
        $rotafugas->salas()->attach(Input::get('sala_id'));

        return redirect()->route('rotafugas.index');
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
        $salas = Sala::get();
        $rotafugas = RotaFuga::find($id);
        return view('rotafugas.editar', [
            'id' => $rotafugas->id,
            'descricao' => $rotafugas->descricao,
            'ativo' => $rotafugas->ativo,
            'sala_id' => $rotafugas->sala_id,
            'imagem' =>$rotafugas->imagem,
            'sala' =>$salas
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $rotafuga = RotaFuga::find($id);
        $rotafuga->descricao = Input::get('descricao');
        $rotafuga->ativo = Input::get('ativo');
        $rotafuga->sala_id = Input::get('sala_id');
        $rotafuga->imagem = Input::get('imagem');
        $rotafuga->save();

        return redirect()->route('rotafugas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($rotafugas)
    {
        $rotafuga = RotaFuga::find($rotafugas);
        $rotafuga->delete();
        return redirect()->route('rotafugas.index');
    }
}
