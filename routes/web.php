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

// Route::get('/', function () {
//     return view('user/home');
// });

// Route::get('/admin', function () {
//     return view('admin/admin_dashboard');
// });
// Auth::routes();
// Route::get('/got', [
//   'middleware' => ['auth'],
//   'uses' => function () {
//    echo "You are allowed to view this page!";
// }]);

// Route::get('/logout', function () {
// 	Auth::logout();
// 	return redirect('/admin-login');
// )};
Route::auth();

Route::get('/admin-login', 'LoginController@adminlogin')->name('admin-login');

Route::get('/', 'HomeController@uindex1')->name('fungi');
Route::get('/service', 'HomeController@uindex2')->name('service');
Route::get('/detail', 'ViewController@detail')->name('fungi-detail');

// Route::group(['as' => 'id_cendawan.'], function() {
//     Route::any('/detail/{id_cendawan}', [
//         'as'    => 'detail',
//         'uses'  => 'ViewController@detail'
//     ]);
// }


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
Route::get('/fungi-add', 'FungiController@entri2')->name('fungi-add');
Route::get('/add-location', 'FungiController@state')->name('add-location');
Route::get('/add-prov', 'FungiController@findProv')->name('add-prov');
Route::get('/add-city', 'FungiController@findCity')->name('add-city');
Route::get('/add-district', 'FungiController@findDistrict')->name('add-district');


Route::get('/db-mng', 'FungiController@index2')->name('db-mng');

Route::post('/db-mng', 'FungiController@postEntri2');

Route::get('/operator', 'OperatorController@index')->name('o-fungi-mng');
Route::get('/operator-fungi-edit', 'OperatorController@opedit')->name('o-fungi-edit');

Route::get('/verificator', 'VerificatorController@index')->name('v-fungi-mng');
Route::get('/verificator-fungi-view', 'VerificatorController@view')->name('v-fungi-view');