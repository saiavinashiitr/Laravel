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
Route::get('/', function () 
{
    return view('welcome');
});

Route::post( '/', 'Controller@insert');

Route::get('/login', function () 
{
    return view('login');
});

Route::post('/login' , 'Controller@login');

Route::get('/display', function () 
{
    return view('display');
});

Route::get('/display' , 'Controller@display'); 	