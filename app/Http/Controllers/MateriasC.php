<?php

namespace App\Http\Controllers;

use App\Models\MateriasM;
use Illuminate\Http\Request;

class MateriasC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias = MateriasM::all();
        return view('admin.Materias',compact('materias'));
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
        $materias = new MateriasM();
        $materias->NombreM = $request->input("NombreM");
        $materias->Horas = $request->input("Horas");

        $materias->save();
        $materias = MateriasM::all();

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
    public function update(Request $request, $idMateria)
    {
        $materias =MateriasM::where('idMateria',$idMateria)->first();
        $materias->NombreM = $request->NombreM;
        $materias->Horas = $request->Horas;

        $materias->save();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idMateria)
    {
        $materias =MateriasM::where('idMateria',$idMateria)->first();

        if ($materias != null) {
            $materias->delete();

            return redirect()->back();
        }else {
            return redirect()->back();
        }
    }

}
