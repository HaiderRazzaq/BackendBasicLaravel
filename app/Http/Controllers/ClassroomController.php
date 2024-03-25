<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use App\Models\classroom;

class ClassroomController extends Controller
{
    public function index()
    {$classrooms = classroom::all();
        return view('classrooms.classrooms', compact('classrooms'));}

    public function create()
    {return view('classrooms.addclassroom');}

    public function store(StoreClassroomRequest $request)
    {
        // $classroom = $request->validate(
        //     ['classname' => 'required',
        //         'classowner' => 'required']);

        $classname = $request['classname'];
        $classowner = $request['classowner'];
        //first way to make insert
        // $newclass = new classroom;
        // $newclass->class_name = $classname;
        // $newclass->class_owner = $classowner;
        // $newclass->save();
        //sec way to make insert
        $newclass = classroom::create(['class_name' => $classname, 'class_owner' => $classowner]);
        if ($newclass) {
            return to_route('classrooms.create')->with('success', 'Add new class Has been successfuly !');
        } else {return to_route('classrooms.create')->withErrors(['Add new Class Was Faild !']);};
    }

    public function show($classid)
    {$classroom = classroom::FindOrFail($classid);
        return view('classrooms.singleclassroom', compact('classroom'));}

    public function edit($classid)
    {$classroom = classroom::FindOrFail($classid);
        return view('classrooms.editclassroom', ['classroom' => $classroom]);}

    public function update($classid, UpdateClassroomRequest $request)
    {$classroomid = classroom::FindOrFail($classid);

        // $class = request()->validate(['classname' => 'required', 'classowner' => 'required']);

        $classroomid->update([
            'class_name' => $request['classname'],
            'class_owner' => $request['classowner'],
        ]);
        if ($classroomid) {
            return back()->with('success', 'The Data Is Update Successfully!');
        } else {
            return back()->withErrors(["Sorry The Data Is Not Updated"]);
        }}

    public function destroy($classid)
    {$classroom = classroom::FindOrFail($classid);
        if ($classroom->delete()) {
            return to_route('classrooms.index')->with('success', 'Class Item Has been Deleted  Successfully!');
        } else {return to_route('classrooms.index')->withErrors(['Class Item Has been  failed To delete!']);}}

}
