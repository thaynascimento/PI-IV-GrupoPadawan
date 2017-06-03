<?php

namespace App\Http\Controllers\Api;

use App\Andare;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AndaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Andare::all();
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
        $andar = new Andare();
        $andar->descricao = Input::get('descricao');
        $andar['ativo'] = (!isset($cargo['ativo'])) ? 1 : 0;
        $andar->localizacao_id = Input::get('localizacao_id');
        $andar->save();
        $andar->localizacoe()->attach(Input::get('localizacao_id'));

        return $andar;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Andare::find($id);
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
        $andar = Andare::find($id);

        if($andar){
            $andar->descricao = Input::get('nome');
            $andar['ativo'] = (!isset($cargo['ativo'])) ? 1 : 0;
            $andar->localizacao_id = Input::get('localizacao_id');
            $andar->save();

            return $andar;
        }
        return response()->json([
            'erro' => 'Andar inexistente!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $andar = Andare::find($id);

        if($andar){
            $andar->delete();
            return response()->json([
                'mensagem' => 'Andar excluído!'
            ]);
        }
        return response()->json([
            'erro' => 'Andar inexistente!'
        ]);
    }
}
