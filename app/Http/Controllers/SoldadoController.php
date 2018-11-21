<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soldado;
class SoldadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soldados= Soldado::All();
        return view('soldados.index',compact('soldados'));
        //return $soldados;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           
         return view('soldados.create', compact('soldados'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            /*$validateData = $request->validate([
            'nombres' => 'required',
            'sexo' => 'required',
            'ci' => 'required',
            'telefono' => 'required',
            'ojos' => 'required',
            'sangre' => 'required',
            'estatura' => 'required',
            'peso' => 'required'
        ]);*/

        
         $soldados = new  Soldado();
         $soldados->nombres = $request->input('nombres');
         $soldados->sexo = $request->input('sexo');
         $soldados->ci = $request->input('ci');
         $soldados->telefono = $request->input('telefono');
         $soldados->ojos = $request->input('ojos');
         $soldados->sangre = $request->input('sangre');
         $soldados->estatura = $request->input('estatura');
         $soldados->peso = $request->input('peso');
        $soldados->arma = $request->input('arma');
         $soldados->save();
         $soldados = Soldado::All();
          return view('soldados.index', compact('soldados'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_Soldado)
    {
        $soldados = Soldado::where('id_Soldado', $id_Soldado)->first();
        return view('soldados.edit', compact('soldados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Soldado)
    {
        $soldados = Soldado::where('id_Soldado', $id_Soldado)->first();
        return view('soldados.edit', compact('soldados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Soldado)
    {
        $soldados = Soldado::find($id_Soldado);
        $soldados->telefono = $request->input('telefono');
        $soldados->estatura = $request->input('estatura');
        $soldados->peso = $request->input('peso');
        $soldados->save();
        return view('soldados.index', compact('soldados'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soldados = \App\soldadoss::find($id);
        $soldados->delete();
        return redirect('soldados.index')->with('success','Information has been  deleted');
    }
}
