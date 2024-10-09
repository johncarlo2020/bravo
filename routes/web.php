<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolletController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', 'App\Http\Controllers\MainController@form')->name('form');
Route::get('/quote', 'App\Http\Controllers\MainController@quote')->name('quote');
Route::get('/end', 'App\Http\Controllers\MainController@end')->name('end');

Route::post('/user', 'App\Http\Controllers\MainController@user')->name('user');
Route::post('/result', 'App\Http\Controllers\MainController@result')->name('result');
