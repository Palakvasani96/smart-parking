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
Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

//Route::get('adminHome', 'HomeController@adminHome')->name('adminHome')->middleware('is_admin');
Route::get('userList', 'HomeController@userList')->name('userList')->middleware('is_admin');

Route::get('userData', 'HomeController@getUsers')->name('userData');