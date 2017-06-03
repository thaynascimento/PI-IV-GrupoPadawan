<?php

namespace App\Http\Controllers\Api;

use App\Cargo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cargo::all();
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
        $cargo = new Cargo();
        $cargo->descricao = Input::get('descricao');
        $cargo['ativo'] = (!isset($cargo['ativo'])) ? 1 : 0;
        $cargo->save();
        return $cargo;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cargo::find($id);
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
        $cargo = Cargo::find($id);

        if($cargo){
            $cargo->descricao = Input::get('descricao');
            $cargo->save();

            return $cargo;
        }
        return response()->json([
            'erro' => 'Cargo inexistente!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $cargo = Cargo::find($id);

        if($cargo){
            $cargo->delete();
            return response()->json([
                'mensagem' => 'Cargo excluido!'
            ]);
        }
        return response()->json([
            'erro' => 'Cargo inexistente!'
        ]);
    }
}
