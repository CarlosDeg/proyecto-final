<?php

namespace App\Http\Controllers;

use App\Models\PersonalM;
use Illuminate\Http\Request;

class PersonalC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personal = PersonalM::all();
        return view('admin.RegistroPersonal',compact('personal'));
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
        $personal = new PersonalM();

        $personal->NombreP = $request->input("NombreP");
        $personal->ApellidoPP = $request->input("ApellidoPP");
        $personal->ApellidoMP = $request->input("ApellidoMP");
        $personal->CorreoP = $request->input("CorreoP");
        $personal->DireccionP = $request->input("DireccionP");
        $personal->EdadP = $request->input("EdadP");
        $personal->TelefonoP = $request->input("TelefonoP");
        $personal->save();
        $personal = PersonalM::all();
//idPersonal	NombreP	ApellidoPP	ApellidoMP	CorreoP	DireccionP	EdadP	TelefonoP
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
    public function update(Request $request, $idPersonal)
    {
        $personal =PersonalM::where('idPersonal',$idPersonal)->first();
        $personal->ApellidoPP= $request->ApellidoPP;
        $personal->ApellidoMP = $request->ApellidoMP;
        $personal->CorreoP = $request->CorreoP;
        $personal->DireccionP = $request->DireccionP;
        $personal->EdadP = $request->EdadP;
        $personal->TelefonoP = $request->TelefonoP;

        $personal->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPersonal)
    {
        $personal =PersonalM::where('idPersonal',$idPersonal)->first();

        if ($personal != null) {
            $personal->delete();

            return redirect()->back();
        }else
        {
            return redirect()->back();    }
    }
}
