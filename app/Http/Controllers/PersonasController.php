<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Personas;
class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$persona = Persona::All();
       return view('personas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           
         return view('personas.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

            $validateData = $request->validate([
            'nombrecompleto' => 'required',
            'sexo' => 'required',
            'ci' => 'required',
            'telefono' => 'required',
            'colordeojos' => 'required',
            'tipoS' => 'required',
            'estatura' => 'required',
            'peso' => 'required'
        ]);

        
         $persona = new Persona();
         $persona->nombrecompleto = $request->input('nombres');
         $persona->sexo = $request->input('sexo');
         $persona->ci = $request->input('ci');
         $persona->telefono = $request->input('telefono');
         $persona->colordeojos = $request->input('ojos');
         $persona->tipoS = $request->input('sangre');
         $persona->estatura = $request->input('estatura');
         $persona->peso = $request->input('peso');
         $persona->save();
         $persona = Persona::All();
         return view('personas.index');
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
    public function destroy($id)
    {
        //
    }
}
