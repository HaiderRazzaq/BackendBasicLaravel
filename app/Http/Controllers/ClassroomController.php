<?php

namespace App\Http\Controllers;

use App\Models\classroom;

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

    public function store()
    {
        //without validation
        $classroom = request()->all();
        $classname = $classroom['classname'];
        $classowner = $classroom['classowner'];
        //first way to make insert
        // $newclass = new classroom;
        // $newclass->class_name = $classname;
        // $newclass->class_owner = $classowner;
        // $newclass->save();
        //sec way to make insert
        $newclass = classroom::create(['class_name' => $classname, 'class_owner' => $classowner]);
        if ($newclass) {
            return to_route('classrooms.create')->with('success', 'Add new class Has been successfuly !');
        } else {
            return to_route('classrooms.create')->withErrors(['Add new Class Was Faild !']);
        };

    }

    public function show($classid)
    {
        return view('classrooms.singleclassroom', compact('classid'));

    }

    public function edit($classid)
    {
        return view('classrooms.editclassroom', ['classid' => $classid]);}

}
