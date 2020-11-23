<?php

namespace App\Http\Controllers;

use App\Models\DocenteM;
use Illuminate\Http\Request;

class DocenteC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docente = DocenteM::all();
        return view('admin.RegistroDocente',compact('docente'));
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
        $docente = new DocenteM();
        $docente->NombreD = $request->input("NombreD");
        $docente->ApellidoPD = $request->input("ApellidoPD");
        $docente->ApellidoM = $request->input("ApellidoM");
        $docente->CorreoD = $request->input("CorreoD");
        $docente->Telefono = $request->input("Telefono");
        $docente->Cedula = $request->input("Cedula");
        $docente->Estatus = $request->input("Estatus");
        $docente->save();
        $docente = DocenteM::all();

        return redirect()->back();
        //idCedula	NombreD	ApellidoPD	ApellidoM	CorreoD	Telefono	Cedula	Estatus
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
    public function update(Request $request, $idCedula)
    {
        $docente =DocenteM::where('idCedula',$idCedula)->first();
        $docente->NombreD = $request->NombreD;
        $docente->ApellidoPD = $request->ApellidoPD;
        $docente->ApellidoM = $request->ApellidoM;
        $docente->CorreoD = $request->CorreoD;
        $docente->Telefono = $request->Telefono;
        $docente->Cedula = $request->Cedula;
        $docente->Estatus = $request->Estatus;
        $docente->save();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCedula)
    {
        $docente =DocenteM::where('idCedula',$idCedula)->first();

        if ($docente != null) {
            $docente->delete();

            return redirect()->back();
        }else
        {
            return redirect()->back();    }
    }
}
