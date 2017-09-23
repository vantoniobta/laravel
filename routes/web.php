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
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\View;	


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
	return '<h1>Your age is less then 100 or equal 100</h1>';
});


Route::get('/user/age/{age}', function(){
	return 'Your have permmision';
})->middleware(CheckAge::class);

Route::get('/greeting', function () {
	if (View::exists('greeting')) {
		$name = 'valentin';
       return view('greeting', compact('name'));
   }else{
   	return '<h1>no view created</h1>';
   }
});


Route::get('/vacantes', function(){
	return view('vacantes');
});

Route::get('/postularse', function(){
	return view('postularse');
});

Route::get('/home', function(){
	return view('home');
});


// Route::get('/foo', function(){
// 	return redirect('redirect');
// });

// Route::get('/showRedirect', function(){
// 	return '<h1>Hi redirect route here</h1>';
// })->name('redirect');

// Route::view('/test', 'test');


// Route::get('user/{id}', function($id){
// 	return '<h1>User'.$id."</h1>";
// });


// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });

// Route::get('user/{name?}', function ($name = 'vantonio') {
//     return $name;
// });

