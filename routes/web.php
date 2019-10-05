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

//secret page
Route::get('/home/secret',"HomeController@secretpage");
//登入後會員頁->Boss、採購員工頁面 可看到即將到期未出貨之商品(追蹤進度)
Route::get('/home/secret/boss',"HomeController@bosspage"); 

//product (Boss、行銷、採購)
//登入後會員頁->行銷員工頁面 可看到商品品項、售價
Route::get('/home/secret/products',"ProductsController@index"); 
Route::resource('/home/secret/products', 'ProductsController');

// employees (Boss、人事)
//登入後會員頁->人事員工頁面 可看到公司員工個人資料
Route::get('/home/secret/employees',"EmployeesController@index"); 
Route::resource('/home/secret/employees', 'EmployeesController');

// customers (Boss、行銷)
Route::get('/home/secret/customers',"CustomersController@index");
Route::resource('/home/secret/customers', 'CustomersController');

//suppliers (Boss、採購)
Route::get('/home/secret/suppliers',"SuppliersController@index");
Route::resource('/home/secret/suppliers', 'SuppliersController');

//purchase  (Boss、採購)
Route::get('/home/secret/purchase',"HomeController@purchasepage");

//order (Boss、行銷)




