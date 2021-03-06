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

Route::get('index',[
	'as'=>'homepage',
	'uses'=>'PageController@getIndex'
]);

Route::get('type-product/{type}',[
	'as'=>'typeproduct',
	'uses'=>'PageController@getTypeProduct'
]);

Route::get('detail-product',[
	'as'=>'detailproduct',
	'uses'=>'PageController@getDetail'
]);

Route::get('contact',[
	'as'=>'contact',
	'uses'=>'PageController@getContact'
]);

Route::get('about',[
	'as'=>'about',
	'uses'=>'PageController@getAbout'
]);