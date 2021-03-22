<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // CARA 1
//  membuat rute untuk page home
Route::get('/', [PagesController::class, 'home']);

//  membuat rute untuk page about
Route::get('/about', [PagesController::class, 'about']);

// //  membuat rute untuk page students
// Route::get('/students', 'App\Http\Controllers\StudentsController@index');

// //  membuat rute untuk page tambah data
// Route::get('/students/create', 'App\Http\Controllers\StudentsController@create');

// //  membuat rute untuk page students
// Route::get('/students/{student}', 'App\Http\Controllers\StudentsController@show');

// //  membuat rute untuk page home
// Route::post('/students', 'App\Http\Controllers\StudentsController@store');

// // route untuk hapus
// Route::delete('/students/{student}', 'App\Http\Controllers\StudentsController@destroy');

// // route untuk edit
// Route::get('/students/{student}/edit', 'App\Http\Controllers\StudentsController@edit');

// // route untuk update
// Route::put('/students/{student}', '\App\Http\Controllers\StudentsController@update');

// CARA 2(LEBIH SIMPLE UNTUK CRUD)
Route::resource('students', 'App\Http\Controllers\StudentsController');
