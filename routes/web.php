<?php

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
    return view('Kimani Tabitha.home');
});
Route::resource('student','StudentController');
Route::resource('fees','FeesController');
Route::get('/student', 'HomeController@getStudent');
Route::get('/fees', 'HomeController@getFees');


Route::get('/search',function(){
    return view('Kimani Tabitha.search');

});

Route::get('/allstudents','FeesController@searchAll');
Route::post('/oneresult','FeesController@searchOne');



