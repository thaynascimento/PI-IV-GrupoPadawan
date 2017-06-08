<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Input;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::get();
        return view('cargos.index', $cargos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cargo = new Cargo();
        $cargo->descricao = Input::get('descricao');
        $cargo['ativo'] = (!isset($cargo['ativo'])) ? 0 : 1;
        $cargo->save();
        return redirect()->route('cargos.index');
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
        $cargo = Cargo::find($id);
        return view('cargos.editar', [
            'id' => $cargo->id,
            'descricao' => $cargo->descricao,
            'ativo' => $cargo->ativo,
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
        $cargo = Cargo::find($id);
        $cargo->descricao = Input::get('descricao');
        $cargo->ativo = Input::get('ativo');
        $cargo->save();

        return redirect()->route('cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cargos)
    {
        $cargo = Cargo::find($cargos);
        $cargo->delete();
        return redirect()->route('cargos.index');
    }
}
