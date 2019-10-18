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

Route::get('/home/login', 'HomeController@login');
Route::post('/home/login', 'HomeController@login');


//secret page
Route::get('/home/secret',"HomeController@secretpage");
Route::post('/home/secret',"HomeController@secretpage");

//登入後會員頁->Boss、採購員工頁面 可看到即將到期未出貨之商品(追蹤進度)
Route::get('/home/secret/announcement',"HomeController@announcementpage"); 

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

//purchases  (Boss、採購)
Route::get('/home/secret/purchase',"PurchaseController@index");
Route::resource('/home/secret/purchase', 'PurchaseController');


//orders (Boss、行銷)
Route::get('/home/secret/orders',"OrdersController@index");
Route::resource('/home/secret/orders', 'OrdersController');








