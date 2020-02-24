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
    return view('welcome');
});

Route::get('hi', function () { 
	return "Hi, lagi belajar laravel ni yee...."; 
});
Route::get('myView', function(){ 
	return view('webtest'); 
});

Route::get('ID/{id}', function($id){ 
	echo 'ID anda : '.$id; 
});

Route::get('viewcontroll', 'MyfirstController@index');

Route::get('tampilnama', 'MyfirstController@nama');

Route::get('matkul', 'MyfirstController@matkul');

Route::get('getname/{nama}', 'MyfirstController@getNameFromUrl');

Route::get('formulir', 'MyfirstController@formulir'); 

Route::post('formulir/proses', 'MyfirstController@proses');

Route::get('home', 'MyfirstController@home'); 

Route::get('tentang', 'MyfirstController@tentang');

Route::get('admin', 'adminController@index');

Route::get('Master/indexUser', 'Master\UserController@index');
Route::get('Master/createUser', 'Master\UserController@create');
Route::get('Master/destroyUser', 'Master\UserController@destroy');
Route::get('Master/editUser', 'Master\UserController@edit');

Route::get('Master/indexProduct', 'Master\ProductController@index');
Route::get('Master/createProduct', 'Master\ProductController@create');
Route::get('Master/destroyProduct', 'Master\ProductController@destroy');
Route::get('Master/editProduct', 'Master\ProductController@edit');

Route::get('Master/indexCategories', 'Master\CategoriesController@index');
Route::get('Master/createCategories', 'Master\CategoriesController@create');
Route::get('Master/destroyCategories', 'Master\CategoriesController@destroy');
Route::get('Master/editCategories', 'Master\CategoriesController@edit');

Route::get('Master/indexCustomer', 'Master\CustomerController@index');
Route::get('Master/createCustomer', 'Master\CustomerController@create');
Route::get('Master/destroyCustomer', 'Master\CustomerController@destroy');
Route::get('Master/editCustomer', 'Master\CustomerController@edit');

Route::get('Transaksi/index', 'Transaksi\SalesController@index');
Route::get('Transaksi/create', 'Transaksi\SalesController@create');
Route::get('Transaksi/destroy', 'Transaksi\SalesController@destroy');
Route::get('Transaksi/edit', 'Transaksi\SalesController@edit');

Route::get('Transaksi/index2', 'Transaksi\SalesDetailController@index');
Route::get('Transaksi/create2', 'Transaksi\SalesDetailController@create');
Route::get('Transaksi/destroy2', 'Transaksi\SalesDetailController@destroy');
Route::get('Transaksi/edit2', 'Transaksi\SalesDetailController@edit');
