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


Route::get('home', [
	'as'=>'home',
	'uses'=>'PageController@home'
]);
Route::get('productdetail/{id}','ProductController@productdetail');
Route::get('product', [
	'as'=>'product',
	'uses'=>'ProductController@product'
]);
// Route::get('dang-nhap',[
// 	'as'=>'login',
// 	'uses'=>'PageController@getLogin'
// ]);
// Route::post('dang-nhap',[
// 	'as'=>'login',
// 	'uses'=>'PageController@postLogin'
// ]);

Route::get('register','UserController@register');
Route::post('checkregister','UserController@checkregister');

Route::get('login','UserController@login');
Route::post('checklogin','UserController@checkLogin');
Route::get('search','UserController@search');
Route::get('cart','CartController@cart');
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'CartController@Addcart'
]);
Route::get('delete_cart/{id}','CartController@deletecart');

Route::group(['prefix'=> "admin"],function(){
	Route::group(['prefix' => 'user'], function(){
		Route::get('create','UserController@create');
		Route::post('create','UserController@store');

		Route::get('edit/{id}','UserController@edit');
		Route::post('edit/{id}','UserController@update');

		Route::get('index','UserController@index');

		Route::get('show/{id_user}','UserController@show');

		Route::get('delete/{id_user}','UserController@destroy');
	});
	Route::group(['prefix' => 'type'], function(){
		Route::get('create',['as'=>'admin.type.getcreatetype','uses'=>'ProductTypeController@create']);
		Route::post('create',['as'=>'admin.type.postcreatetype','uses'=>'ProductTypeController@store']);
		Route::get('edit/{id_product_type}','ProductTypeController@edit');
		Route::post('edit/{id_product_type}','ProductTypeController@update');
		Route::get('index','ProductTypeController@index');
		Route::get('delete/{id_product_type}','ProductTypeController@destroy');
		
	});
	Route::group(['prefix' => 'product'], function(){
		Route::get('create','ProductController@create');
		Route::post('create','ProductController@store');
		Route::get('edit/{id_product}','ProductController@edit');
		Route::post('edit/{id_product}','ProductController@update');
		Route::get('index','ProductController@index');
		Route::get('show','ProductController@show');
	});
	Route::group(['prefix' => 'bill'], function(){
		Route::get('index','UserController@getIndexBill');
		Route::get('show','UserController@getShowBill');
		
});
Route::group(['prefix' => 'login'], function(){
		Route::get('/','UserController@getLogin');	
});
		
});

