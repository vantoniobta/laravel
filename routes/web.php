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

Route::prefix('cdmx')->group(function(){
	Route::get('/job/{id}', 'WorkController@info');
	Route::post('/send', 'WorkController@save');
});

Route::prefix('mty')->group(function(){
	Route::get('/job/{id}', 'WorkController@info');
	Route::post('/send', 'WorkController@save');
});

//Route::get('/redirect', 'SocialAuthController@redirect');
//Route::get('/callback', 'SocialAuthController@callback');
Route::get('/redirect/{provider}', 'SocialAuthController@redirect');
Route::get('/callback/{provider}', 'SocialAuthController@callback');

// Route::post('vacantes/insert', 'WorkController@save');
// Route::get('vacantes/save', function () {
//     return view('vacantes/save');
// });
Route::get('vacantes/error', function () {
    return view('vacantes/error');
});

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/vacantes', function(){
//     $works = App\Job::where('status', '=', 'Activo')->orderBy('created_at', 'desc')->paginate(5);
// 	return view('vacantes', compact('works'));
// });

Route::get('/mty', function(){
    $works = App\Job::where([
    	['status', '=', 'Activo'],
    	['address', '=', 'Monterrey']
    	])->orderBy('created_at', 'desc')->paginate(5);
	return view('mty', compact('works'));
});

Route::get('/cdmx', function(){
    $works = App\Job::where([
    	['status', '=', 'Activo'],
    	['address', '=', 'Ciudad México']
    	])->orderBy('created_at', 'desc')->paginate(5);
	return view('cdmx', compact('works'));
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/users/register', function(){
	return view('users/register');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('post', 'PostController');

//dashboard ->admin
Route::prefix('admin')->group(function(){
	   Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	   Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

	   Route::get('/jobs_edit/{id}', 'AdminController@redirect_jobs_edit')->name('admin.dashboard');
	   Route::post('/jobs_save_edit/{id}', 'AdminController@save_edit')->name('admin.dashboard');
	   
	   Route::get('/jobs_new', 'AdminController@redirect_jobs')->name('admin.dashboard');
	   Route::get('/users', 'AdminController@all_users')->name('admin.dashboard');

	   Route::get('/xlsx', 'AdminController@activity_xlsx')->name('admin.dashboard');


	   Route::get('/postulates/{id}', 'AdminController@postulates_get')->name('admin.dashboard');
	   Route::get('/postulates/notifications', 'AdminController@notifications')->name('admin.dashboard');
       Route::post('/jobs_save', 'AdminController@save')->name('admin.dashboard');
       Route::get('/', 'AdminController@index')->name('admin.dashboard');

});

//Route::get('admin/jobs_new', 'AdminController@redirect_jobs')->name('admin.dashboard');
//Route::post('admin/jobs_save', 'AdminController@save')->name('admin.dashboard');


