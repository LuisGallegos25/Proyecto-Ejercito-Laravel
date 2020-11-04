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
        $soldado= Soldado::All();
        return view('soldados.index',compact('soldado'));
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

        
         $soldado = new  Soldado();
         $soldado->nombres = $request->input('nombres');
         $soldado->sexo = $request->input('sexo');
         $soldado->ci = $request->input('ci');
         $soldado->telefono = $request->input('telefono');
         $soldado->ojos = $request->input('ojos');
         $soldado->sangre = $request->input('sangre');
         $soldado->estatura = $request->input('estatura');
         $soldado->peso = $request->input('peso');
        $soldado->arma = $request->input('arma');
         $soldado->save();
         $soldado = Soldado::All();
          return view('soldados.index', compact('soldado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_Soldado)
    {
       //$soldado = Soldado::where('id_Soldado', $id_Soldado)->first();
       $soldado = Soldado::find($id_Soldado);
        return view('soldados.edit', compact('soldado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Soldado)
    {
       $soldado = Soldado::find($id_Soldado);
        //$soldado = Soldado::find($id_Soldado);
        return view('soldados.edit', compact('soldado'));
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
        $soldado = Soldado::find($id_Soldado);
        $soldado->telefono = $request->input('telefono');
        $soldado->estatura = $request->input('estatura');
        $soldado->peso = $request->input('peso');
        $soldado->update();
        $soldado = Soldado::All();
          return view('soldados.index', compact('soldado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Soldado)
    {
        $soldado = Soldado::find($id_Soldado);
        $soldado->delete();

        $soldado  = Soldado::All();
        return view('soldados.index', compact('soldado'));
    }
}
