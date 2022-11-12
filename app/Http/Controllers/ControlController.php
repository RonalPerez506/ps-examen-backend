<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculo;

class ControlController extends Controller
{
    public function index()
    {
        $calculo = Calculo::all();
        return $calculo;
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $calculo = new Calculo();

        $calculo->velocidad= $request->velocidad;
        $calculo->aceletacion= $request->aceletacion;
        $calculo->timepo= $request->timepo;
    
        $calculo->save();
    }
    
    public function show($id)
    {
        $calculo = Calculo::find($id);
        return view('calculo.show', ['calculo'=>$calculo]);
    }

    public function get($id){
        $calculo = Calculo::find($id);
        return response()->json($calculo, 200);
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $calculo = Calculo::findOrFail($request->id);
        $calculo->velocidad= $request->velocidad;
        $calculo->aceleracion= $request->aceleracion;
        $calculo->tiempo= $request->tiempo;

        $calculo->save();
        return $calculo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calculo $calculo
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Response $request
     */
    public function destroy(Request $request)
    {

        $calculo = Calculo::destroy($request->id);

        return $calculo;
    }

}
