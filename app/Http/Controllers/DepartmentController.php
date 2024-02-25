<?php

namespace App\Http\Controllers;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('departments.departmentlist');}

    public function create()
    {
        return view('departments.adddepartment');}

    public function store(){
        $addnewdepartments=request();
        dd($addnewdepartments);
    }

    public function show($departmentid)
    {
        return view('departments.singledepartment', ['departmentid' => $departmentid]);}
    public function edit($departmentid)
    {
        return view('departments.editdepartment', compact('departmentid'));}
}
