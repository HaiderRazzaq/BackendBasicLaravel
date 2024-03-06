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
            return to_route('departments.create')->withErrors(['Error while adding the department']);
        }
    }

    public function show($departmentid)
    {
        return view('departments.singledepartment', ['departmentid' => $departmentid]);}
    public function edit($departmentid)
    {
        return view('departments.editdepartment', compact('departmentid'));}

    public function destroy($departmentid)
    {
        // $deletedepartment = department::where('id', $departmentid)->delete();
        $deletedepartment = department::where('id', $departmentid);
        if ($departmentid == null) {
            return to_route('departments.index')->with('error', 'Department Not Found !');
        } else {
            $deletedepartment->delete();
            return to_route('departments.index')->with('success', 'Department item has been Deleted !');
        }
    }

}
