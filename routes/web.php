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

//Auth
    //Route::get('/', function () {    return view('welcome');});
    Route::get('/','HomeController@index')->name('home');
    //Route::get('/','InicioController@index')->name('inicio');

    Auth::routes();
    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function() {
        //Route::get('/', 'AdminController@index' ) ->name('inicio');
        //Admin
        //Route Resource
            Route::resource('anuncios', 'AnuncioController');
            Route::resource('events', 'EventController');
            Route::resource('promotions', 'PromotionController');
            Route::resource('tags', 		'TagController');
            Route::resource('categories', 'CategoryController');
            Route::resource('departments', 	'DepartmentController');
            Route::resource('commerces', 	'CommerceController');
            Route::resource('mycommerces', 	'CommerceController');
            Route::resource('products', 	'ProductController');
        //Route Resource
        Route::get('commerce/{commerce_slug}','CommerceController@show')             ->name('commerce_show');
        Route::get('{commerce_slug}/products', 'ProductController@product_list')     ->name('product_list');
        Route::get('admin/departments','DepartmentController@index')                 ->name('departments'); 
        Route::get('admin/tags','TagController@index')                               ->name('tags');  
        Route::get('admin/categories','CategoryController@index')                    ->name('categories');        
        Route::get('admin/products','ProductController@index')          ->name('products');
        Route::get('admin/events','EventController@index')              ->name('events');        
        Route::get('admin/promotions','PromotionController@index')      ->name('promotions');
        Route::get('admin/anuncios','AnuncioController@index')          ->name('anuncios');
       
        //Admin

});
