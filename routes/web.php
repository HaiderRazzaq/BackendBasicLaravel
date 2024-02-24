<?php

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

//best way to make view route 'haider'
Route::view('/classrooms', 'classrooms.classrooms')->name('classrooms.index');

Route::view('/classrooms/create', 'classrooms.addclassroom')->name('classrooms.create');

Route::view('/classrooms/edit', 'classrooms.editclassroom')->name('classrooms.edit');

Route::get('/students', function () {
    return view('students.studentslist');})->name('students.index');

Route::get('/students/create', function () {
    return view('students.addstudent');})->name('students.create');

Route::get('/students/edit', function () {
    return view('students.editstudent');})->name('students.edit');
