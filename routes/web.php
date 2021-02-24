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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('adminHome', 'HomeController@adminHome')->name('adminHome')->middleware('is_admin');




Route::get('userList', 'UserController@index')->name('userList');
Route::get('userList/edit/{id}', 'UserController@edit');
Route::post('userList/store', 'UserController@store')->name('userStore');
Route::get('userList/delete/{id}', 'UserController@destroy');