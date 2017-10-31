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

Route::get('profile', 'UserController@profile');
Route::post('profile/{id}', 'UserController@update_avatar');





//info works
Route::get('vacantes/info/{id}', 'WorkController@info');
Route::post('vacantes/save', 'WorkController@save');

Route::get('vacantes/save', function () {
    return view('vacantes/save');
});


// Route::get('vacantes/save', function(){
// 	return view('vacantes/save');
// });


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


//new tabs for menu 

Route::get('/vacantes', function(){
    $works = App\Work::all();
	return view('vacantes', compact('works'));
});

Route::get('/home', function(){

	return view('home', ['i'=>1]);
});


Route::get('/login', function(){
	return view('login');
});

Route::get('/users/register', function(){
	return view('users/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
