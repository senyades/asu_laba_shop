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

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', 'HomeController@index');
Route::get('/contact', 'HomeController@contact');
Route::post('/contact', 'HomeController@submitContactForm')->name('contact.submit');
Route::get('/about', 'HomeController@about');
Route::get('/products', 'ProductController@index');
Route::post('/products', 'ProductController@store')->name('products.store');
Route::get('/products/create', 'ProductController@create')->name('products.create');