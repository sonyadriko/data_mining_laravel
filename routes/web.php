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
    return view('welcome');
});
Route::get('/login', function(){
    return view('login');
});
// Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index');


Route::get('/data_training', '\App\Http\Controllers\DataTrainingController@index');
Route::get('/data_training/create', '\App\Http\Controllers\DataTrainingController@create');
Route::post('/data_training/create', '\App\Http\Controllers\DataTrainingController@store');
Route::get('/data_training/edit/{id}', '\App\Http\Controllers\DataTrainingController@edit');
Route::post('data_training/update/{id}','\App\Http\Controllers\DataTrainingController@update'); //UPDATE DATA (POST/PUT)
Route::get('/data_training/delete/{id}','\App\Http\Controllers\DataTrainingController@destroy'); //DELETE DATA


Route::get('/atribut', '\App\Http\Controllers\AtributController@index');
Route::get('/hitung', '\App\Http\Controllers\HitungController@index');

