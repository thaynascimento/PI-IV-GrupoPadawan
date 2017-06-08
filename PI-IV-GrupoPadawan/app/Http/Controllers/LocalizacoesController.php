<?php

namespace App\Http\Controllers;

use App\Localizacoe;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Input;

class LocalizacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localizacoes = Localizacoe::get();
        return view('localizacoes.index', $localizacoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('localizacoes.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $localizacao = new Localizacoe();
        $localizacao->descricao = Input::get('descricao');
        $localizacao['ativo'] = (!isset($localizacao['ativo'])) ? 0 : 1;
        $localizacao->save();
        return redirect()->route('localizacoes.index');
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
        $localizacao = Localizacoe::find($id);
        return view('localizacoes.editar', [
            'id' => $localizacao->id,
            'descricao' => $localizacao->descricao,
            'ativo' => $localizacao->ativo,
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
        $localizacao = Localizacoe::find($id);
        $localizacao->descricao = Input::get('descricao');
        $localizacao->ativo = Input::get('ativo');
        $localizacao->save();

        return redirect()->route('localizacoes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($localizacoes)
    {
        $localizacao = Cargo::find($localizacoes);
        $localizacao->delete();
        return redirect()->route('localizacoes.index');
    }
}
