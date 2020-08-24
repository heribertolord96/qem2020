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

/*
Route::get('/', function () {
    return view('vue_container/vue_container');
});*/
Route::get('admin/tiendas','Admin\CommerceController@index')->name('tiendas');
Route::resource('tiendas', 	'CommerceController');
Auth::routes();
Route::get('commerces', 		'Admin\CommerceController@index');
Route::resource('commerces',         'Admin\CommerceController');
Route::get('commerce\{commerce_slug}','Admin\CommerceController@show');
Route::post('chained/department','Admin\CommerceController@department');
Route::get('chained/department','Admin\CommerceController@department');
Route::post('chained/category','Admin\CommerceController@category');
Route::get('chained/category','Admin\CommerceController@category');
Route::post('chained/product','Admin\CommerceController@product');
Route::get('chained/product','Admin\CommerceController@product');
//------------------
Route::post('commerce/departments', 'Admin\DepartmentController@departments');
Route::get('commerce/departments', 'Admin\DepartmentController@departments') //Obtiene los departamentos de una tienda
    ;

//Route::get('commerces', 		'Admin\CommerceController@index');
Route::get('admin/{commerce_slug}/commerces', 'Admin\CommerceController@commerce')->name('commerce');
Route::get('my_commerces', 'Admin\CommerceController@my_commerces');
Route::post('commerce/store', 'Admin\CommerceController@store');
Route::put('commerce/update', 'Admin\CommerceController@update');
//Route::get('commerce_role_user', 'Admin\CommerceController@selectCommerceRoleUser');
//Relacion con mi  commerce_id

Route::resource('departments',         'Admin\DepartmentController');
//Department routes

//oldies... rap

//===================================================
Route::get('admin/tag/{slug}', 'Admin\TagController@tag')->name('tag');
Route::resource('tags',         'Admin\TagController');
//Commerce routes


//Route::get('get_commerce', 'Admin\CommerceController@getcommerce')->name('getcommerce');
//Route::resource('commerces',         'Admin\CommerceController');


//Route::get('admin/my_commerces', 'Admin\CommerceController@my_commerces')->name('my_commerces');
//En el menu lateral...
//Route::get('Admin\CommerceController@menu_mycommerces')->name('menu_mycommerces');
//Route::resource('commerces',         'Admin\CommerceController');

//Commerce routes   
//Department routes

//Category routes
Route::get('admin/categories/{slug}', 'Admin\CategoryController@categories')->name('commerce_categories');
Route::resource('categories',         'Admin\CategoryController');
Route::get('admin/categories', 'Admin\CategoryController@categories')->name('categories');
Route::resource('categories',         'Admin\CategoryController');

//Category routes
//Product routes   

Route::get('admin/{slug}/myproducts', 'Admin\ProductController@myproducts')
    ->name('myproducts'); //Del metodo index
Route::get('admin/{slug}/products', 'Admin\ProductController@products')
    ->name('commerce_products'); //Del metodo index
//Route::resource('products', 		'Admin\ProductController');
Route::resource('products',         'Admin\ProductController@index');
Route::get('admin/product/{slug}', 'Admin\ProductController@show')
    ->name('product');
Route::resource('products',         'Admin\ProductController');
//Product routes 
//Promotion routes
Route::get('admin/promotion/{slug}', 'Admin\PromotionController@promotion')->name('promotion');
Route::resource('promotions',         'Admin\PromotionController');
//Promotion routes
//Event routes
Route::get('admin/event/{slug}', 'Admin\EventController@event')->name('event');
Route::resource('events',         'Admin\EventController');
