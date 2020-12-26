<?php

namespace App\Http\Controllers\admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
use Validator;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Student::all();
            return view('admins.student.index', ['students' => $students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  //$request means the parameters of the form
        Student::create($request->all());
        $request->server();
        return redirect()->route('admins.students.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $arr['student']=$student;
        return view('admins.student.edit')->with($arr);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $student=Student::find($id);
      //  dd($student);
        
        $student->name_en=$request->name_en;
        $student->name_ar=$request->name_ar;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->student_id=$request->student_id;
        $student->password=$request->password;
        $student->gpa=$request->gpa;
        $student->units=$request->units;
        $student->address=$request->address;
        $student->image=$request->img;
        $student->birthdate=$request->birthdate;
        $student->status=$request->status;
        $student->department_id=$request->department_id;
        
        $student->save();
        return redirect()->route('admins.students.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        return redirect()->route('admins.students.index');

    }
}
