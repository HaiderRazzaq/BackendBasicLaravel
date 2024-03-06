<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
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
Route::get('/classrooms', ['App\Http\Controllers\ClassroomController', 'index'])->name('classrooms.index');
//another way to use controller
Route::get('/classrooms/create', [ClassroomController::class, 'create'])->name('classrooms.create');

Route::post('/classrooms', [ClassroomController::class, 'store'])->name('classrooms.store');

Route::get('/classrooms/{class}', [ClassroomController::class, 'show'])->name('classrooms.show');

Route::get('/classrooms/{classid}/edit', [ClassroomController::class, 'edit'])->name('classrooms.edit');




Route::get('/students', [StudentController::class, 'index'])->name('students.index');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::post('/students', [StudentController::class, 'store'])->name('students.store');

Route::get('/students/{studentid}', [StudentController::class, 'show'])->name('students.show');

Route::get('/students/{studentid}/edit', [StudentController::class, 'edit'])->name('students.edit');

Route::put('/students/{studentid}', [StudentController::class, 'update'])->name('students.update');

Route::DELETE('/student/{studentid}', [StudentController::class, 'destroy'])->name('students.destroy');


Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');

Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');

Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');

Route::get('/departments/{departmentid}', [DepartmentController::class, 'show'])->name('departments.show');

Route::get('/departments/{departmentid}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');

Route::put('/departments/{departmentid}',[DepartmentController::class,'update'])->name('departments.update');

Route::DELETE('/departments/{departmentid}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
