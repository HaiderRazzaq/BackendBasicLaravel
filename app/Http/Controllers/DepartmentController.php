<?php

namespace App\Http\Controllers;

use App\Models\department;

class DepartmentController extends Controller
{
    public function index()
    {

        $departments = department::all();

        return view('departments.departmentlist', ['departments' => $departments]);

    }

    public function create()
    {
        return view('departments.adddepartment');}

    public function store()
    {
        $departments = request();
        $departmentname = $departments->departmentname;
        $departmentowner = $departments->departmentowner;

        $newdep = department::create([
            'department_name' => $departmentname,
            'department_owner' => $departmentowner]);
        if ($newdep) {
            return to_route('departments.create')->with('success', 'Department added successfully ! ');
        } else {
            return to_route('departments.create')->withErrors(['Error while adding the department']);}
    }

    public function show($departmentid)
    {
        $department = department::FindOrFail($departmentid);
        return view('departments.singledepartment', ['department' => $department]);}

    public function edit($departmentid)
    {
        $department = department::FindOrFail($departmentid);
        return view('departments.editdepartment', compact('department'));

    }

    public function destroy($departmentid)
    {
        // $deletedepartment = department::where('id', $departmentid)->delete(); //not suitable for delete
        $deletedepartment = department::findOrFail($departmentid);
        // dd($deletedepartment);
        if ($deletedepartment == null) {
            return to_route('departments.index')->withErrors(['Department Not Found !']);
        } else {
            $deletedepartment->delete();
            return to_route('departments.index')->with('success', 'Department item has been Deleted !');}
    }

}
