<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Models\classroom;
use App\Models\department;
use App\Models\student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $students = student::all();
        return view('students.studentslist', compact('students'));
    }

    public function create()
    {
        $classrooms = classroom::all();
        $departments = department::all();
        return view('students.addstudent', compact('classrooms', 'departments'));
    }

    public function store(StoreStudentRequest $request)
    {
        // $studentsdata = request()->validate([
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'email' => ['required', 'email'],
        //     'phone' => ['required', 'numeric'],
        //     'departmentname' => ['required','exists:departments,id'],
        //     'classroom' => ['required','exists:classrooms,id'],
        //     'address' => 'required',
        //     'city' => 'required',
        // ]);
        $student = new student;
        $student->first_name = $request['firstname'];
        $student->last_name = $request['lastname'];
        $student->email = $request['email'];
        $student->phone = $request['phone'];
        $student->department_id = $request['departmentname'];
        $student->classroom_id = $request['classroom'];
        $student->address = $request['address'];
        $student->city = $request['city'];
        $student->user_id = Auth::user()->id;
        $student->save();
        return to_route('students.create')->with('success', 'Student added successfully!');

    }
    public function show($studentid)
    {
        // $student = student::findOrFail($studentid);
        $student = Student::withTrashed()->findOrFail($studentid);
        return view('students.singlestudent', ['singlestudent' => $student]);
    }

    public function edit($studentid)
    {
        $departments = department::all();
        $classrooms = classroom::all();
        $student = student::findOrfail($studentid);
        return view('students.editstudent', compact('student', 'departments', 'classrooms'));
    }

    public function update($studentid)
    {
        $student = student::findOrFail($studentid);
        $studentsdata = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['email', 'required'],
            'phone' => ['required', 'numeric'],
            'departmentname' => ['required', 'exists:departments,id'],
            'classroom' => ['required', 'exists:classrooms,id'],
            'address' => 'required',
            'city' => 'required',
        ]);

        $student->update([
            'first_name' => $studentsdata['firstname'],
            'last_name' => $studentsdata['lastname'],
            'email' => $studentsdata['email'],
            'phone' => $studentsdata['phone'],
            'department_id' => $studentsdata['departmentname'],
            'classroom_id' => $studentsdata['classroom'],
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
        // $student = student::findOrFail($studentid)->delete();
        $student = student::destroy($studentid);
        if ($student) {
            return to_route('students.index')->with('success', 'Student has been deleted !');
        } else {
            return to_route('students.index')->withErrors(['Delete Failed !']);
        }
    }

    public function soft(){
        $students=student::onlyTrashed()->get();
        return view('students.studentsoft',compact('students'));
    }

}
