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

Route::get('/','ShopController@showIndex')->name('frontend.index');

Route::get('/promotion','ShopController@showPromotion')->name('promotion');

Route::get('loginform','ShopController@showLogin')->name('loginpage');

Route::get('/register','ShopController@showRegister')->name('register');

Route::get('/shoppingcart','ShopController@showShoppingcart')->name('shoppingcart');

Route::get('/subcategory','ShopController@showSubcategory')->name('subcategory');

Route::get('/brand','ShopController@showBrand')->name('brand');

Route::get('/itemdetail','ShopController@showItemdetail')->name('itemdetail');



//Backend-------------------------------------

Route::resource('orders','OrderController');

Route::middleware('role:Admin')->group(function(){

Route::get('dashboard','backendController@dashboardfun')->name('dashboard');

Route::resource('brands','BrandController');

Route::resource('items','ItemController');

Route::resource('categories','CategoryController');

Route::resource('subcategories','SubcategoryController');

});




Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
