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

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home_user', function () {
    return view('home_user');
});

Route::get('regisAdmin', function (){
    return view('registerAdmin');
});
Route::resource('admin', 'AdminController');
Route::resource('admin/event', 'EventController');



Route::get('/home_user', 'User@index');
//Route::get('/login', 'User@login');
//Route::post('/loginPost', 'User@loginPost');
//Route::get('/register', 'User@register');
//Route::post('/registerPost', 'User@registerPost');
//Route::get('/logout', 'User@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
