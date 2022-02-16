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

Route::get('ramen','RamenController@index');

Route::get('restaurant','RestaurantController@index');
Route::get('restaurant/search/{restaurant?}','RestaurantController@search');

Route::get('menu','MenuController@index');
Route::get('menu/search','MenuController@search');
//Route::post('menu/search','MenuController@res_put');

Route::get('ramen/session','RamenController@ses_get');
Route::post('ramen/session','RamenController@ses_put');