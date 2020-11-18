<?php

namespace App\Http\Controllers;


use App\Models\Alumnos;
use Illuminate\Http\Request;


class RegistroAlumnoC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $Alumnos = Alumnos::all();
        return view('admin.RegistroAlumnos',compact('Alumnos'));
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

        $Alumnos = new Alumnos();
        $Alumnos->NombreA = $request->input("NombreA");
        $Alumnos->ApellidoPA = $request->input("ApellidoPA");
        $Alumnos->ApellidoMA = $request->input("ApellidoMA");
        $Alumnos->CorreoA = $request->input("CorreoA");
        $Alumnos->DireccionA = $request->input("DireccionA");
        $Alumnos->SexoA = $request->input("SexoA");
        $Alumnos->TipoSangre = $request->input("TipoSangre");
        $Alumnos->TelefonoT = $request->input("TelefonoT");
        $Alumnos->Estatus = $request->input("Estatus");
        $Alumnos->save();
        $Alumno = Alumnos::all();

        return redirect()->back();
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
