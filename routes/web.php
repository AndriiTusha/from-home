<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index');
Route::get('/category/{slug}', 'MainController@category');

Route::post('/category/{slug}', 'MainController@getCategory');

Route::get('product/{slug}', 'MainController@product');

Route::post('/', 'MainController@getProduct');

Route::get('/search', 'MainController@findYourCar');

Route::get('/contacts', 'MainController@contacts'); // маршрут для перехода на страницу Контакты

Route::get('/europe', 'MainController@europe');
Route::get('/usa', 'MainController@usa');
Route::get('/japan', 'MainController@japan');

Route::post('/contacts', 'MainController@sendContacts'); // маршрут для передачи формы со стр "контакты"

Route::get('/about', 'MainController@about');

Route::post('product/{slug}', 'MainController@getReview');

Route::post('/cart/add', 'CartController@add'); // маршрут для корзины (добавить товар)
Route::post('/cart/clear', 'CartController@clear');
Route::post('/cart/remove', 'CartController@remove');

Route::get('/checkout', 'CartController@checkout');
Route::get('/end-checkout', 'CartController@endCheckout');
 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
	'prefix' => 'admin',
	'namespace' => 'Admin',
	'middleware' => ['auth', 'admin']
], function(){
	Route::get('/', 'AdminController@index'); //функция-посредник для проверки авторизации
	Route::resource('/category', 'CategoryController');
	Route::resource('/product', 'ProductController');
});



