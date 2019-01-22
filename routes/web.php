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
    return view ('welcome');
});
Route::get('/lemot', function (){
  echo "kenapa kok lemot";
});
Route::get('/home', function (){
  return "disini omah";
});
Route::get('/sama', function (){
  return "sama saja sami mawon omah";
});
Route::get('/pohong', function (){
  return view ('telo');
});
//pakai kontroler
Route::get('/terong','CapungController@index');
//Route ::get ('/Supplier','SupplierController@index');
//memanggil Controller
//capung dengan fungsi pujangga
Route::get('/brokoli','CapungController@index');
Route::get('/brokoli/dewa','CapungController@index');
//sekarang membuat route untuk customer
//Route ::get ('/Customer','CustomerController@index');
//sekarang membuat route untuk add customer
//Route ::get ('/Customer/create','CustomerController@create');
//sekarang membuat route untuk membuat store dari customer
//Route ::get ('/Customer/store','CustomerController@store');

Route::resource ('Customer','CustomerController');
Route::resource ('Supplier','SupplierController');
Route::resource ('Employee','EmployeeController');
