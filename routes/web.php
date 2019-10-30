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


use App\Client;
use App\Provider;
use App\Service;
use App\Proposal;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', 'ClientController@dashboard')->name('dashboard');
Route::get('/dashboard/create', 'ClientController@create')->name('service.create');
Route::post('/dashboard/save', 'ClientController@save');
Route::get('/services/{service}', 'ClientController@show');
Route::post('/category','ServiceController@category')->name('category');

Route::get('/services', 'ServiceController@index')->name('services');
//Route::resource('home', 'ClientController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
