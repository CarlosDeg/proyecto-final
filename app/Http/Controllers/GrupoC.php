<?php

namespace App\Http\Controllers;

use App\Models\CarrerasM;
use App\Models\GrupoM;
use App\Models\SemestreM;
use Illuminate\Http\Request;

class GrupoC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = GrupoM::all();
        $carreras = CarrerasM::all();
        $semestres = SemestreM::all();


        return view('admin.Grupo',compact('grupos','carreras','semestres'));
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
        $grupos = new GrupoM();

        $grupos->Grupo = $request->input("Grupo");
        $grupos->FechaI = $request->input("FechaI");
        $grupos->FechaF = $request->input("FechaF");
        $grupos->idCarrera = $request->input("idCarrera");
        $grupos->idSemestre = $request->input("idSemestre");

        $grupos->save();
        //idGrupo	Grupo	FechaI	FechaF	idCarrera	idSemestre
        $grupos = GrupoM::all();

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
