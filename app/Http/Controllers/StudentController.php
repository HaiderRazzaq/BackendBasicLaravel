<?php

namespace App\Http\Controllers;

use App\Models\student;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::all();
        return view('students.studentslist', compact('students'));}

    public function create()
    {
        return view('students.addstudent');}

    public function store()
    {
        $studentsdata = request()->all();
        $student = new student;
        $student->first_name = $studentsdata['firstname'];
        $student->last_name = $studentsdata['lastname'];
        $student->email = $studentsdata['email'];
        $student->phone = $studentsdata['phone'];
        $student->department = $studentsdata['departmentname'];
        $student->classroom = $studentsdata['classroom'];
        $student->address = $studentsdata['address'];
        $student->city = $studentsdata['city'];
        $student->save();
        return to_route('students.create');
    }
    public function show($studentid)
    {
        $student = student::find($studentid);
        return view('students.singlestudent', ['singlestudent' => $student]);}

    public function edit($studentid)
    {
        $student = student::findOrfail($studentid);
        return view('students.editstudent', compact('student'));}

    public function update($studentid){
        $test=student::findOrFail($studentid)->update([
            'first_name'=>request()->firstname,
            'last_name'=>request()->lastname,
            'email'=>request()->email,
            'phone'=>request()->phone,
            'department'=>request()->departmentname,
            'classroom'=>request()->classroom,
            'address'=>request()->address,
            'city'=>request()->city]);

            if($test==true){

                return ('its good');
            }
    }

}
