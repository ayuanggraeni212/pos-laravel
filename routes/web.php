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
//Route
Route::get('/', function () {
    return view('welcome');
});

Route :: get('hello', function() {
	echo '<h1> Hello Laravel</h1>';
});

//Route passing views
Route :: get('belajar', function(){
	return view('belajar');
});

//Route to Controler
//Route siswa controller ke function index
Route ::get('siswa','SiswaController@index');


//Route Dosen
Route ::get('dosen','DosenController@index');

Route ::get('blog','BlogController@index');
Route ::get('blog/about','BlogController@about');
Route ::get('blog/contact', 'BlogController@contact');

Route :: resource('category', 'CategoryController');
Route :: resource('customer', 'CustomerController');
Route :: resource('product', 'ProductController');
Route :: resource('order', 'OrderController');
Route :: resource('order-detail', 'OrderDetailController');