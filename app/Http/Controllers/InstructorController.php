<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;
class instructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructor= Instructor::All();
        return view('instructor.index',compact('instructor'));
        //return $instructors;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           
         return view('instructor.create', compact('instructor'));
       
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

        
         $instructor = new  Instructor();
         $instructor->nombres = $request->input('nombres');
         $instructor->sexo = $request->input('sexo');
         $instructor->ci = $request->input('ci');
         $instructor->telefono = $request->input('telefono');
         $instructor->ojos = $request->input('ojos');
         $instructor->sangre = $request->input('sangre');
         $instructor->estatura = $request->input('estatura');
         $instructor->peso = $request->input('peso');
        $instructor->arma = $request->input('arma');
         $instructor->save();
         $instructor = instructor::All();
          return view('instructor.index', compact('instructor'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_Instructor)
    {
        $instructor = Instructor::where('id_Instructor', $id_Instructor)->first();
        return view('instructor.index2', compact('instructor'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_Instructor)
    {
      $instructor = Instructor::where('id_Instructor', $id_Instructor)->first();
        return view('instructor.index2', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_Instructor)
    {
        $instructor = Instructor::find($id_Instructor);
        $instructor->telefono = $request->input('telefono');
        $instructor->estatura = $request->input('estatura');
        $instructor->peso = $request->input('peso');
        $instructor->save();
        $instructor = Instructor::All();
          return view('instructor.index', compact('instructor'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_Instructor)
    {
        $instructor = Instructor::find($id_Instructor);
        $instructor->delete();
        $instructor = Instructor::All();
        return view('instructor.index', compact('instructor'));
    }
}
