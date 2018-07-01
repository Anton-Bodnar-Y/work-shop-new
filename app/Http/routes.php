<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', ['uses'=>'MainController@getIndex', 'as'=>'main']);

Route::get('/product/{id}', ['uses'=>'ProductController@getProduct', 'as'=>'product']);

Route::get('/page/{page_id}', ['uses'=>'PageController@getPage', 'as'=>'page']);

Route::get('/category/{category_id}/{price_one?}/{price_two?}', ['uses'=>'CategoryController@getCategoryProducts', 'as'=>'category']);
Route::post('/category-price', ['uses'=>'CategoryController@getCategoryProductsPrice', 'as'=>'category-price']);

Route::get('/order', ['uses'=>'OrderController@getIndex', 'as'=>'order']);

Route::get('/questions', ['uses'=>'QuestionController@getQuestions', 'as'=>'questions']);
Route::get('/question/{question_id}', ['uses'=>'QuestionController@getQuestion', 'as'=>'question']);

Route::post('/search', ['uses'=>'ProductController@getSearchProducts', 'as'=>'search']);





Route::get('/getcountproductsfromheader', ['uses'=>'ProductController@countProductsInCart', 'as'=>'getcountproductsfromheader']);
Route::post('/addproducttocart', ['uses'=>'ProductController@addProductToCart', 'as'=>'addproducttocart']);
Route::post('/deleteproductfromcart', ['uses'=>'ProductController@deleteProductFromCart', 'as'=>'deleteproductfromcart']);
Route::post('/orderrealization', ['uses'=>'OrderController@orderRealization', 'as'=>'orderrealization']);



Route::group(['prefix'=>'admin', 'middleware'=>"auth"], function () {
	
	Route::get('/', ['uses'=>'Admin\MainAdminController@getIndex', 'as'=>'admin']);
	
	
	Route::get('/products', ['uses'=>'Admin\ProductsAdminController@getIndex', 'as'=>'admin/products']);
	Route::get('/categories', ['uses'=>'Admin\MainAdminController@getIndex', 'as'=>'admin/categories']);
	
	
});













Route::auth();

Route::get('/home', 'HomeController@index');
