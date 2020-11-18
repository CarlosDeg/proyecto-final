<?php

namespace App\Http\Controllers;

use App\Models\AdministrativoM;
use Illuminate\Http\Request;

class AdministrativosC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Administrativo =AdministrativoM::all();
        return view('admin.RegistroAdministrativo',compact('Administrativo'));
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

        $Administrativo = new AdministrativoM;
        $Administrativo->NombreAd = $request->input("NombreAd");
        $Administrativo->ApellidoPAd = $request->input("ApellidoPAd");
        $Administrativo->ApellidoMAd = $request->input("ApellidoMAd");
        $Administrativo->TelefonoAd = $request->input("TelefonoAd");
        $Administrativo->Puesto = $request->input("Puesto");
        $Administrativo->CorreoAd = $request->input("CorreoAd");
        $Administrativo->save();
        $categorias = AdministrativoM::all();

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