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
Route::resource('/menus', 'menusController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function () 
{
    return view('menus.aboutus');
});

Route::get('/staff', function ()
{
    return view('menus.staff');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
