<?php

namespace App\Http\Controllers;

use App\Modul;
use Illuminate\Http\Request;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  
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
        $modul = new Modul();
        $modul -> name = $request->name;
        $modul -> student_id = $request->student;
        $modul -> recibo = '0';
        $modul -> informe = '';
        $modul -> solicitud = '';
        $modul -> proyecto = '0';
        $modul -> memorandum = '';
        $modul -> f_supervision = '0';
        $modul -> f_evaluacion = '';
        $saved = $modul->save();

        $data=[];
        $data['success'] = $saved;
        $data['modul'] = $modul;

        return $data;

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $moduls = Modul::where('student_id', $id)->orderBy('id', 'ASC')->get();
        return $moduls;
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
        $id = $request->id;
        $modul = Modul::find($id);
        $modul -> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $modul= Modul::findOrFail($id);
            $modul->delete();

    }
}
