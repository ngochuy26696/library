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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => 'auth'], function (){
    Route::group(['prefix' => 'category', 'as' => 'category-'], function (){
        Route::get('/', 'CategoryController@index')->name('index');
        Route::get('create', 'CategoryController@create')->name('create');
        Route::post('create', 'CategoryController@store')->name('create');
        Route::get('update/{id}', 'CategoryController@edit')->name('update');
        Route::post('update/{id}', 'CategoryController@update')->name('update');
        Route::get('detail/{id}', 'CategoryController@show')->name('detail');
        Route::post('delete', 'CategoryController@destroy')->name('delete');
    });

    Route::group(['prefix' => 'book', 'as' => 'book-'], function (){
        Route::get('/', 'BookController@index')->name('index');
        Route::get('create', 'BookController@create')->name('create');
        Route::post('create', 'BookController@store')->name('create');
        Route::get('update/{id}', 'BookController@edit')->name('update');
        Route::post('update/{id}', 'BookController@update')->name('update');
        Route::get('detail/{id}', 'BookController@show')->name('detail');
        Route::post('delete', 'BookController@destroy')->name('delete');
    });

    Route::group(['prefix' => 'user', 'as' => 'user-'], function (){
        Route::get('/', 'UserController@index')->name('index');
        Route::post('delete', 'UserController@destroy')->name('delete');
    });

    Route::group(['prefix' => 'receipt', 'as' => 'receipt-'], function (){
        Route::get('/', 'ReceiptController@index')->name('index');
        Route::post('delete', 'ReceiptController@destroy')->name('delete');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'WebController@index')->name('web-index');
Route::get('detail/{id}', 'WebController@show')->name('web-detail');
Route::get('about', 'WebController@about')->name('web-about');
Route::get('contact', 'WebController@contact')->name('web-contact');
Route::get('cart', 'WebController@showCart')->name('web-cart');