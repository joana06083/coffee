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
Route::get('/home/index',"HomeController@index");

// login
Route::get('/home/login',"HomeController@loginpage");
Route::POST('/home/login',"HomeController@loginpage");

//secret
Route::get('/home/secret',"HomeController@secretpage");

//product
Route::get('/home/secret/products',"ProductsController@index");
Route::resource('/home/secret/products', 'ProductsController');

// employees
Route::get('/home/secret/employees',"EmployeesController@index");
Route::resource('/home/secret/employees', 'EmployeesController');

// customers
Route::get('/home/secret/customers',"CustomerssController@index");
Route::resource('/home/secret/customers', 'CustomerssController');







