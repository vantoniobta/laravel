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
//Route::get('vacantes/info/{id}', 'WorkController@info');


// Route::get('info/{id}', [
//     'as'   => 'vacantes/info/{id}',
//     'uses' => 'WorkController@info'
// ]);


Route::prefix('vacantes')->group(function(){
	Route::get('/info/{id}', 'WorkController@info');
	Route::post('/insert', 'WorkController@save');
});






//facebook
Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');







// Route::post('vacantes/insert', 'WorkController@save');
Route::get('vacantes/save', function () {
    return view('vacantes/save');
});
Route::get('vacantes/error', function () {
    return view('vacantes/error');
});




Route::get('/', function () {
    return view('welcome');
});



//new tabs for menu 

Route::get('/vacantes', function(){
    $works = App\Job::where('status', '=', 'Activo')->orderBy('created_at', 'desc')->paginate(5);
	return view('vacantes', compact('works'));
});


// Route::get('admin/jobs_new', function(){
// 	return view('admin/jobs_new');
// });



Route::get('/login', function(){
	return view('login');
});

Route::get('/users/register', function(){
	return view('users/register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 	   Route::get('admin/jobs_new', function(){
// 	return view('admin/jobs_new');
// });

//dashboard ->admin
Route::prefix('admin')->group(function(){
	   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');


	   Route::get('/jobs_edit/{id}', 'AdminController@redirect_jobs_edit')->name('admin.dashboard');
	   Route::post('/jobs_save_edit/{id}', 'AdminController@save_edit')->name('admin.dashboard');

	   
	   Route::get('/jobs_new', 'AdminController@redirect_jobs')->name('admin.dashboard');
	   Route::get('/postulates/{id}', 'AdminController@postulates_get')->name('admin.dashboard');
       Route::post('/jobs_save', 'AdminController@save')->name('admin.dashboard');
       Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

//Route::get('admin/jobs_new', 'AdminController@redirect_jobs')->name('admin.dashboard');
//Route::post('admin/jobs_save', 'AdminController@save')->name('admin.dashboard');



