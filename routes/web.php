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

Route::get('/about-us', function () 
{
    return view('menus.about-us');
});

Route::get('/staff', function ()
{
    return view('menus.staff');
});

Route::get('/schoolcurriculum', function ()
{
return view('menus.schoolcurriculum');
});

Route::get('/department', function ()
{
return view('menus.department');
});

Route::get('/contact-us' , 'ContactController@getContact');

Route::post('/contact-us' , 'ContactController@saveContact');

Route::get('/schoolfacilities' , function ()
{
return view('menus.schoolfacilities');
});

Route::get('/admission-form' , function ()
{
return view('menus.admission-form');
});

Route::get('/games' , function ()
{
return view('menus.games');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
