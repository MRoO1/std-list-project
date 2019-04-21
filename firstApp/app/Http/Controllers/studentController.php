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
        $students= Student::all();  
        return view('show_students',['students'=> $students]);    }

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


         // part 2
         //$request->validate------->in case u did not flled the empty space it is gonna returned u to same page 
        //it is not going to fuck ur head with err
        $request->validate([
        'student_name'=>'required',
        'student_roll'=>'required',
        'student_email'=>'required|unique:students,email',
        'student_address'=>'required'
    ]);

        $std = new student();
        $std->std_name/*<--- should be the name as in  data base std-name */=$request->input('student_name'/*name of the form*/);
         $std->std_roll=$request->input('student_roll');
        $std->std_address=$request->input('student_address');
        $std->email=$request->input('student_email');
        if ($std->save()) {
            return redirect()->route('student.create')->with('success','Student recordSaved successfully...!');//with()is flash msg
           
        }
        return back()->withInput();

        //part 3 more secure 

      /*
        student::create([

            'std_name'=>$request->input('student_name'),
            'std_roll'=>$request->input('student_roll'),
            'std_address'=>$request->input('student_address'),
            'email'=>$request->input('student_email')
 ]);
        if($student){
            return redirect()->route('student.create')->with('success','Student records Saved successfully..!');
        }
        return back()->withInput();
    
        */
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
