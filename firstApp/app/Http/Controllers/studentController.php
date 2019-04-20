<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('show_students');    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       return view('student.create');   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*echo "<pre>";
        print_r($request->input()); */
        $std = new student();
        $std->std_name/*<--- should be the name as in  data base std-name */=$request->input('student_name'/*name of the form*/);
        $std->std_roll=$request->input('student_roll');
        $std->std_address=$request->input('student_address');
        $std->email=$request->input('student_email');
        if ($std->save()) {
            return redirect()->route('student.create')->with('success','Student recordSaved successfully...!');//with()is flash msg
           
        }
        return back()->withInput();
    
        
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
