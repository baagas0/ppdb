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

Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return 'success';
});

Route::get('/migrate-fresh', function () {
    Artisan::call('migrate:fresh');
    return 'success';
});

Route::get('/db-seed', function () {
    Artisan::call('db:seed');
    return 'success';
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    routeController('dashboard', 'Admin\DashboardController');
    routeController('registrant', 'Admin\RegistrantController');
    routeController('setting', 'Admin\SettingController');
    routeController('slider', 'Admin\SliderController');
});

routeController('/', 'FrontController');
