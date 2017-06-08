<?php

namespace App\Http\Controllers;

use App\Andare;
use App\Localizacoe;
use App\Sala;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Input;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::get();
        return view('salas.index', $salas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(\Illuminate\Http\Request $request)
    {
        $localizacoes = Localizacoe::get();
        $andares = Andare::get();
        return view('salas.cadastrar', ['localizacoes' => $localizacoes], ['andares' => $andares]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salas = new Sala();
        $salas->descricao = Input::get('descricao');
        $salas['ativo'] = (!isset($salas['ativo'])) ? 0 : 1;
        $salas->localizacao_id = Input::get('localizacao_id');
        $salas->andar_id = Input::get('andar_id');
        $salas->save();
        //$salas->localizacoe()->attach(Input::get('localizacao_id'));
        //$salas->andares()->attach(Input::get('andar_id'));

        return redirect()->route('salas.index');
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
        $salas = Sala::find($id);
        $localizacoes = Localizacoe::get();
        $andares = Andare::get();
        return view('salas.editar', [
            'id' => $salas->id,
            'descricao' => $salas->descricao,
            'ativo' => $salas->ativo,
            'localizacao_id' => $salas->localizacao_id,
            'andar_id' => $salas->andar_id,
            'localizacao' =>$localizacoes,
            'andar' =>$andares
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
        $sala = Sala::find($id);
        $sala->descricao = Input::get('descricao');
        $sala->ativo = Input::get('ativo');
        $sala->localizacao_id = Input::get('localizacao_id');
        $sala->sala_id = Input::get('sala_id');
        $sala->save();

        return redirect()->route('salas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($salas)
    {
        $sala = Sala::find($salas);
        $sala->delete();
        return redirect()->route('salas.index');
    }
}
