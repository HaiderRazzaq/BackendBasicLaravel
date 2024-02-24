<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index')->name('index');

// Route::get('/classrooms',function(){
// return view('classrooms.classrooms');
// });

//random way to use controller
Route::get('/classrooms', ['App\Http\Controllers\ClassroomController','index'])->name('classrooms.index');
//another way to use controller
Route::get('/classrooms/create',[ClassroomController::class,'create'])->name('classrooms.create');

Route::get('/classrooms/{class}',[ClassroomController::class,'show'])->name('classrooms.show');

Route::get('/classrooms/{classid}/edit', [ClassroomController::class,'edit'])->name('classrooms.edit');



Route::get('/students', [StudentsController::class,'index'])->name('students.index');

Route::get('/students/create', function () {
    return view('students.addstudent');})->name('students.create');

Route::get('/students/{studentid}',function($studentid){
    return view('students.singlestudent',['studentid'=>$studentid]);})->name('students.show');

Route::get('/students/{studentid}/edit', function ($studentid) {
    return view('students.editstudent',compact('studentid'));})->name('students.edit');



Route::get('/departments',function(){
return view('departments.departmentlist');})->name('departments.index');

Route::get('/departments/create',function(){
    return view('departments.adddepartment');})->name('departments.create');

Route::get('/departments/{departmentid}',function($departmentid){
    return view('departments.singledepartment',['departmentid'=>$departmentid]);})->name('departments.show');

Route::get('/departments/{departmentid}/edit',function($departmentid){
    return view('departments.editdepartment',compact('departmentid'));})->name('departments.edit');
