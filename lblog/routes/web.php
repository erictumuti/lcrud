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
//use of controller
Route::get('/', 'studentController@index' )->name('home');
Route::get('/create', 'studentController@create' )->name('create'); //route of  page
Route::post('/create', 'studentController@store' )->name('store'); //route of  page
Route::get('/edit/{id}', 'studentController@edit' )->name('edit');
Route::post('/update/{id}', 'studentController@update' )->name('update');



Route::get('/test', 'TestController@index' );

//use of route
Route::get('/hello', function () {
    return "Hello world";
});

Route::get('/user/{id}', function ($id) {
    return "Your id is "  .$id;
});
