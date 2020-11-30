<?php

namespace App\Http\Controllers;

use App\Models\CarrerasM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarrerasC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $carreras = CarrerasM::all();

        return view('admin.Carreras',compact('carreras'));;
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

        $carreras = new CarrerasM();

        $carreras->Carrera = $request->input("Carrera");


        $carreras->save();
        $carreras = CarrerasM::all();
        $request->session()->flash('alert-success', 'Carrera Guardada con exito!');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idCarrera)
    {

        $carreras =CarrerasM::where('idCarrera',$idCarrera)->first();
        $carreras ->Carrera = $request->Carrera;
        $carreras->save();
        $request->session()->flash('alert-success', 'Carrera editada con exito!');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$idCarrera)
    {
       /* $carreras = CarrerasM::find($idCarrera);
        $carreras->delete();
        return redirect()->back();*/

        $carreras =CarrerasM::where('idCarrera',$idCarrera)->first();

        if ($carreras != null) {
            $carreras->delete();
            $request->session()->flash('alert-success', 'Carrera eliminada con exito!');

            return redirect()->back();
        }else
        {
            return redirect()->back();    }





    }
}
