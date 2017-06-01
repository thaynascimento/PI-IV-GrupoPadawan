<?php

namespace App\Http\Controllers;

use App\Andare;
use App\Localizacoe;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Input;

class AndaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $andares = Andare::get();
        return view('andares.index', $andares);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(\Illuminate\Http\Request $request)
    {
        $localizacoes = Localizacoe::get();
        return view('andares.cadastrar', ['localizacoes' => $localizacoes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $andar = new Andare();
        $andar->descricao = Input::get('descricao');
        $andar['ativo'] = (!isset($cargo['ativo'])) ? 1 : 0;
        $andar->localizacao_id = Input::get('localizacao_id');
        $andar->save();
        $andar->localizacoe()->attach(Input::get('localizacao_id'));
        return redirect()->route('andares.index');
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
    public function destroy($andares)
    {
        $andar = Andare::find($andares);
        $andar->delete();
        return redirect()->route('andares.index');
    }
}
