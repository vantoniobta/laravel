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
    return view('welcome');
});

Route::get('/foo', function(){
	return redirect('redirect');
});

Route::get('/showRedirect', function(){
	return '<h1>Hi redirect route here</h1>';
})->name('redirect');

Route::view('/test', 'test');


Route::get('user/{id}', function($id){
	return '<h1>User'.$id."</h1>";
});


Route::get('user/{name?}', function ($name = null) {
    return $name;
});

Route::get('user/{name?}', function ($name = 'vantonio') {
    return $name;
});