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
        $studentsdata = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric'],
            'departmentname' => 'required',
            'classroom' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);
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
        return to_route('students.create')->with('success', 'Student added successfully!');

    }
    public function show($studentid)
    {
        $student = student::findOrFail($studentid);
        return view('students.singlestudent', ['singlestudent' => $student]);}

    public function edit($studentid)
    {
        $student = student::findOrfail($studentid);
        return view('students.editstudent', compact('student'));}

    public function update($studentid)
    {
        $student = student::findOrFail($studentid);
        $studentsdata = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['email', 'required'],
            'phone' => ['required', 'numeric'],
            'departmentname' => 'required',
            'classroom' => 'required',
            'address' => 'required',
            'city' => 'required',
        ]);

        $student->update([
            'first_name' => $studentsdata['firstname'],
            'last_name' => $studentsdata['lastname'],
            'email' => $studentsdata['email'],
            'phone' => $studentsdata['phone'],
            'department' => $studentsdata['departmentname'],
            'classroom' => $studentsdata['classroom'],
            'address' => $studentsdata['address'],
            'city' => $studentsdata['city']]);
        if ($student == true) {
            return back()->with('success', 'Student has been updated successfully!');
        } else {
            return back()->withErrors(['Server Error']);
        }
    }

    public function destroy($studentid)
    {
        $student = student::findOrFail($studentid)->delete();
        if ($student) {
            return to_route('students.index')->with('success', 'Student has been deleted !');
        } else {
            return to_route('students.index')->withErrors(['Delete Failed !']);
        }
    }

}
