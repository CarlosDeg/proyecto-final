<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\GraduadosM;
use App\Models\GrupoM;
use Illuminate\Http\Request;

class GraduadosC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $graduados = GraduadosM::all();
        $grupos = GrupoM::all();
        $alumnos = Alumnos::all();

        return view('admin.Graduado',compact('graduados','grupos','alumnos'));

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
        $graduados = new GraduadosM();
        $graduados->promedioGeneral = $request->input("promedioGeneral");
        $graduados->idGrupo = $request->input("idGrupo");
        $graduados->idMatricula = $request->input("idMatricula");


        $graduados->save();
        $graduados= GraduadosM::all();

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
    public function update(Request $request, $idGraduado)
    {
        $graduados =GraduadosM::where('idGraduado',$idGraduado)->first();
        $graduados->promedioGeneral = $request->promedioGeneral;
        $graduados->idGrupo = $request->idGrupo;
        $graduados->idMatricula = $request->idMatricula;


        $graduados->save();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idGraduado)
    {

        $graduados =GraduadosM::where('idGraduado',$idGraduado)->first();


        if ($graduados != null) {
            $graduados->delete();

            return redirect()->back();
        }else {
            return redirect()->back();
        }
    }
}
