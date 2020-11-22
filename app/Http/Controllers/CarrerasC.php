<?php

namespace App\Http\Controllers;

use App\Models\CarrerasM;
use Illuminate\Http\Request;

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

        $carreras = CarrerasM::create($request->input());
        return response()->json($carreras);
       /* $carreras = new CarrerasM();

        $carreras->Carrera = $request->input("Carrera");


        $carreras->save();
        $materias = CarrerasM::all();

        return redirect()->back();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idCarrera)
    {
        $carreras = CarrerasM::find($idCarrera);
        return response()->json($carreras);
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
    public function update( $id)
    {

        $carreras = CarrerasM::find($id);

        return response()->json($carreras);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carreras = CarrerasM::find($id)->delete();
        return response()->json(['success'=>'Post Deleted successfully']);
    }
}
