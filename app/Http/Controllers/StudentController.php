<?php

namespace App\Http\Controllers;

use App\Student;
use App\Promotion;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        /*$id = $request->get('id');
        $name = $request->get('name');
        $students = Student::where('promotion_id', $id)->orderBy('name', 'ASC')->name($name)->get();
        Student::where('promotion_id', $id)->orderBy('name', 'ASC')->get();
        return $students;
        */
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
        $student = new Student();
        $student -> name = $request->name;
        $student -> email = $request->email;
        $student -> promotion_id = $request->promotion_id;
        $saved = $student -> save();

        $data=[];
        $data['success'] = $saved;
        $data['expediente'] = $student;
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $name = $request->get('name');
        return  $students = Student::where('promotion_id', $id)->orderBy('name', 'ASC')->name($name)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrfail($id);
        return $student;
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
        $student= Student::findOrFail($id);
        $student->delete();
    }
}