<?php

namespace App\Http\Controllers\Api;

use App\Localizacoe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocalizacoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Localizacoe::all();
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
        $localizacao = new Localizacoe();
        $localizacao->descricao = Input::get('descricao');
        $localizacao['ativo'] = (!isset($localizacao['ativo'])) ? 1 : 0;
        $localizacao->save();

        return $localizacao;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Localizacoe::find($id);
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
    public function destroy($id){
        $localizacao = Localizacoe::find($id);

        if($localizacao){
            $localizacao->delete();
            return response()->json([
                'mensagem' => 'Localização excluida!'
            ]);
        }
        return response()->json([
            'erro' => 'Localização inexistente!'
        ]);
    }
}
