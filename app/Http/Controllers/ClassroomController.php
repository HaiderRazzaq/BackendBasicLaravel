<?php

namespace App\Http\Controllers;

use App\Models\classroom;

class ClassroomController extends Controller
{
    public function index()
    {$classrooms = classroom::all();
        return view('classrooms.classrooms', compact('classrooms'));}

    public function create()
    {return view('classrooms.addclassroom');}

    public function store()
    { //without validation
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
        } else {return to_route('classrooms.create')->withErrors(['Add new Class Was Faild !']);};}

    public function show($classid)
    {$classroom = classroom::FindOrFail($classid);
        return view('classrooms.singleclassroom', compact('classroom'));}

    public function edit($classid)
    {$classroom = classroom::FindOrFail($classid);
        return view('classrooms.editclassroom', ['classroom' => $classroom]);}

    public function update($classid)
    {$classroomid = classroom::FindOrFail($classid);
        $classname = request()->all();
        $classowner = request()->all();
        


    }

    public function destroy($classid)
    {$classroom = classroom::FindOrFail($classid);
        if ($classroom->delete()) {
            return to_route('classrooms.index')->with('success', 'Class Item Has been Deleted  Successfully!');
        } else {return to_route('classrooms.index')->withErrors(['Class Item Has been  failed To delete!']);}}

}
