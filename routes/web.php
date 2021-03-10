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

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() 
{
	Route::get('/', function () {
		return redirect()->route('admin.dashboard');
	});
	
	routeController('dashboard', 'Admin\DashboardController');
	routeController('registrant', 'Admin\RegistrantController');
	routeController('setting', 'Admin\SettingController');
	routeController('slider', 'Admin\SliderController');
});

routeController('/', 'FrontController');
