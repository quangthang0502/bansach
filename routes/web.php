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

Route::get('/', 'MainController@home')->name('home');

/*
 * Đăng nhập
 */
Route::get('/dang-nhap', 'MainController@getLogin')->name('login');
Route::post('/dang-nhap','Auth\LoginController@postLogin');

/*
 * Đăng ký
 */
Route::get('/dang-ky', 'MainController@getSignUp')->name('signUp');

Route::get('/dang-xuat', 'Auth\LoginController@logout')->name('logout');

Route::get('/ebook/id={id}','MainController@getBook')->name('ebook');

Route::get('/the-loai/{id}', 'MainController@getListBooksByCategory')->name('category');

Route::post('/goi-y', 'MainController@recommender')->name('recommender');

Route::post('/goi-y-sach', 'MainController@recommenderA')->name('recommenderA');