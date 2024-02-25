<?php

namespace App\Http\Controllers;

class ClassroomController extends Controller
{
    public function index()
    {
        return view('classrooms.classrooms');
    }
    public function create()
    {
        return view('classrooms.addclassroom');
    }

    public function store(){
        $newclassroom= request()->all();
        dd($newclassroom);
    }
    public function show($classid)
    {
        return view('classrooms.singleclassroom', compact('classid'));
    }
    public function edit($classid) {
        return view('classrooms.editclassroom', ['classid'=>$classid]);}

}
