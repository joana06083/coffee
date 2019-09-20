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
// index
Route::get('/home/index',"HomeController@index" );

// login
Route::get('/home/login',"HomeController@loginpage");
// Route::post('/home/login',"HomeController@loginpage");

//secret
Route::get('/home/secret',"HomeController@secretpage");
Route::get('/home/secret/product',"HomeController@secret_productpage");

