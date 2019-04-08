<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('typeProduct', [
	'as'=>'Loai-san-pham',
	'uses'=>'PageController@getTypeProduct'
]);

Route::get('chitiet', [
	'as'=>'Chi-tiet',
	'uses'=>'PageController@getChitiet'
]);

Route::get('lienhe', [
	'as'=>'Lien-he',
	'uses'=>'PageController@getLienhe'
]);

Route::get('about', [
	'as'=>'about',
	'uses'=>'PageController@getAbout'
]);

Route::get('viewProduct', function () {
    return view('blog.edit');
});

Route::resource('blog', 'BlogController');
//Route::resource('product', 'ProductController');


Route::get('product','productController@index');

Route::post('product/upload', 'productController@upload');
