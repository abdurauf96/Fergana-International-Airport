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

Route::get('/lang/{locale}', function($locale){
    session(['locale'=>$locale]);
    return back();
});



Route::get('/cache', function(){
   \Artisan::call('config:cache');
   \Artisan::call('cache:clear');
   return back();
});

Route::get('/services/{slug?}', 'IndexController@services');
Route::get('/faq', 'IndexController@faq');
Route::get('/our-location', 'IndexController@location');
Route::get('/online-tablo', 'PageController@tablo');
Route::get('/hotels', 'PageController@hotels');
Route::get('/category/{slug}', 'PageController@posts')->name('posts');
Route::get('/search', 'QueryController@search');
Route::get('/page/{slug}', 'PageController@page')->name('page');
Route::get('/transport', 'PageController@transport');
Route::post('/message', 'PageController@message');

Route::get('/service/{slug}', 'PageController@viewService')->name('viewService');
Route::get('/post/{slug}', 'PageController@viewPost')->name('viewPost');

//ajax routes
Route::post('/get-reys', 'QueryController@getReys');
Route::post('/get-post', 'QueryController@getPost');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/{locale?}', 'IndexController@index')->name('home');
//Routes for infokiosk
Route::get('/{locale}/services', 'PageController@services');
Route::get('/{locale}/schedule', 'PageController@schedule');
