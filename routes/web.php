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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/classrooms',function(){
// return view('classrooms.classrooms');
// });

//best way to make view route 'haider'
Route::view('/classrooms','classrooms.classrooms');
Route::get('/classrooms/create',function(){
    return view('classrooms.addclassroom');

});
