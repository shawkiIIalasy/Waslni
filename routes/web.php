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


Auth::routes();
Route::get('/pricing', 'PageController@pricing');
Route::get('/contact', 'PageController@contact');
Route::get('/tour', 'PageController@tour');
Route::get('/features', 'PageController@features');
Route::POST('/trips/{trips}/comment','CommentController@store');
Route::POST('/trips/{trips}/note','CommentController@note');
Route::get('/home', 'HomeController@index');
Route::get('/admin', 'AdminController@index');
Route::resource('reservates','ReservateController');
Route::resource('trips','TripsController');
Route::resource('cars','CarsController');
Route::get('/Myprofile','PageController@Myprofile');
Route::get('/Profile/{id}','PageController@profile');
Route::POST('/Myprofile/photo/{id}','HomeController@update');
Route::post('/rating/{id}','RatingController@rating');
Route::get('/rating/{id}','RatingController@index');
Route::get('/past','PastandUpController@past');
Route::get('/Up','PastandUpController@Up');
Route::get('/search','SearchController@search');
Route::get('/Top','TopDriver@search');
Route::PUT('/trips/{id}/end','TripsController@end');
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.a');
    Route::get('/index', 'AdminController@dashboard')->name('admin.dashboard');
  });


