<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use App\Models\CastigosM;
use Illuminate\Http\Request;

class CastigosC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reportes = CastigosM::all();
        $alumnos = Alumnos::all();

        return view('admin.Reportes',compact('reportes','alumnos'));
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
        $reportes = new CastigosM();
        $reportes->NombreR = $request->input("NombreR");
        $reportes->Castigo = $request->input("Castigo");
        $reportes->idMatricula = $request->input("idMatricula");


        $reportes->save();
        $reportes= CastigosM::all();

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
    public function update(Request $request, $idReportes)
    {
        $reportes =CastigosM::where('idReportes',$idReportes)->first();
        $reportes ->NombreR = $request->NombreR;
        $reportes ->Castigo = $request->Castigo;
        $reportes ->idMatricula = $request->idMatricula;
        $reportes->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idReportes)
    {
        $reportes =CastigosM::where('idReportes',$idReportes)->first();

        if ($reportes != null) {
            $reportes->delete();

            return redirect()->back();
        }else
        {
            return redirect()->back();
        }

    }
}
