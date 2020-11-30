<?php

namespace App\Http\Controllers;

use App\Models\SemestreM;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class SemestreC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semestre = SemestreM::all();

        return view('admin.Semestre',compact('semestre'));
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
        $semestre = new SemestreM();
        $semestre->Semestre = $request->input("Semestre");
        $semestre->CicloI = $request->input("CicloI");
        $semestre->CicloF = $request->input("CicloF");

        $semestre->save();
        $semestre = SemestreM::all();

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

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idSemestre)
    {
        $semestre =SemestreM::where('idSemestre',$idSemestre)->first();
        $semestre->Semestre = $request->Semestre;
        $semestre->CicloI = $request->CicloI;
        $semestre->CicloF = $request->CicloF;

        $semestre->save();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idSemestre)
    {
        $semestre =SemestreM::where('idSemestre',$idSemestre)->first();

        if ($semestre != null) {
            $semestre->delete();

            return redirect()->back();
        }else {
            return redirect()->back();
        }
    }

}
