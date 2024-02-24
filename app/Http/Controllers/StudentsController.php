<?php

namespace App\Http\Controllers;

class StudentsController extends Controller
{
    public function index()
    {
        return view('students.studentslist');}

    public function create() {
        return view('students.addstudent');}

    public function show($studentid){
        return view('students.singlestudent',['studentid'=>$studentid]);}

    public function edit($studentid) {
        return view('students.editstudent',compact('studentid'));}


}
