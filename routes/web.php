<?php

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
Route::get('/', function () {
    return redirect('/student');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/student', 'StudentController');

Route::post('/student/search', 'StudentController@search')->name('student.search');

Route::post('/student/create/insert', 'StudentController@store')->name('student.insert');

Route::get('/student/edit/{id}', 'StudentController@edit')->name('student.edit');

Route::post('/student/update/{id}', 'StudentController@update')->name('student.update');

Route::get('/student/destroy/{id}', 'StudentController@destroy')->name('student.destroy');

