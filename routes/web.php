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


// Route::get('login','PageController@login');

// Route::auth();

Route::get('/admin-login', 'LoginController@adminlogin')->name('admin-login');

Route::get('/', 'HomeController@uindex1')->name('fungi');
Route::get('/service', 'HomeController@uindex2')->name('service');
Route::get('/detail', 'HomeController@view')->name('fungi-detail');


Route::get('/customer', 'HomeController@cindex1')->name('cus.fungi');
Route::get('/customer-service', 'HomeController@cindex2')->name('cus.service');

Route::get('/admin', 'AdminController@dashboard')->name('dashboard');
Route::get('/admin-fungi-mng', 'AdminController@index')->name('fungi-mng');
// Route::get('/db-mng', 'AdminController@index2')->name('db-mng');

Route::get('/fungi-view', 'ViewController@view')->name('fungi-view');

Route::get('/admin-user-mng', 'AdminController@indexuser')->name('user-mng');
Route::post('/admin-user-mng', 'AdminController@adduser');
Route::get('/admin-user-role', 'AdminController@userrole')->name('user-role');
// Route::post('/admin-user-mng', 'AdminController@adduser');
Route::get('/admin-order-mng', 'AdminController@indexorder')->name('order-mng');
Route::get('/admin-detail-order', 'AdminController@indexinvoice')->name('detail-order');

Route::get('/order-form', 'FungiController@orderform')->name('order-form');
Route::get('/fungi-edit', 'FungiController@entri')->name('fungi-edit');
Route::get('/fungi-add', 'FungiController@postEntri2')->name('fungi-add');
Route::post('/fungi-add', 'FungiController@postEntri2');
Route::get('/add-location', 'FungiController@state')->name('add-location');
Route::get('/add-prov', 'FungiController@findProv')->name('add-prov');
Route::get('/add-city', 'FungiController@findCity')->name('add-city');
Route::get('/add-district', 'FungiController@findDistrict')->name('add-district');

Route::get('/add-divisi', 'FungiController@divisi')->name('add-divisi');
Route::get('/add-findclass', 'FungiController@findClass')->name('add-findclass');
Route::get('/add-ordo', 'FungiController@findOrdo')->name('add-ordo');
Route::get('/add-family', 'FungiController@findFamily')->name('add-family');
Route::get('/add-genus', 'FungiController@findGenus')->name('add-genus');


Route::get('/db-mng', 'FungiController@index2')->name('db-mng');

Route::post('/db-mng', 'FungiController@postEntri2');

Route::get('/operator', 'OperatorController@index')->name('o-fungi-mng');
Route::get('/operator-fungi-edit', 'OperatorController@opedit')->name('o-fungi-edit');

Route::get('/verificator', 'VerificatorController@index')->name('v-fungi-mng');
Route::get('/verificator-fungi-view', 'VerificatorController@view')->name('v-fungi-view');
Route::post('/verificator-fungi-view', 'VerificatorController@view');

Route::delete('/delete', 'AdminController@destroy')->name('delete');