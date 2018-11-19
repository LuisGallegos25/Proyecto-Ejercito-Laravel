<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personas;
class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $persona= Personas::All();
        return view('personas.index',compact('persona'));
        //return $persona;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           
         return view('personas.create', compact('persona'));
       
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

        
         $persona = new  Personas();
         $persona->nombres = $request->input('nombres');
         $persona->sexo = $request->input('sexo');
         $persona->ci = $request->input('ci');
         $persona->telefono = $request->input('telefono');
         $persona->ojos = $request->input('ojos');
         $persona->sangre = $request->input('sangre');
         $persona->estatura = $request->input('estatura');
         $persona->peso = $request->input('peso');
         $persona->save();
         $persona = Personas::All();
          return view('personas.index', compact('persona'));
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
       $persona= \App\Persona::find($id);
       /* $persona->name=$request->get('name');
        $persona->email=$request->get('email');
        $persona->number=$request->get('number');
        $persona->office=$request->get('office');*/
        $persona->save();
        return redirect('personas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = \App\Personas::find($id);
        $persona->delete();
        return redirect('personas.index')->with('success','Information has been  deleted');
    }
}
