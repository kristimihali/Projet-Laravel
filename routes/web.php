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
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/articles', 'ArticlesController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/articles/{post_name}', 'ArticlesController@show');
Route::post('/contact', 'ContactController@save')->name('contact.store');

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::group(['middleware'=>['auth']], function (){

    Route::get('/create', 'ArticlesController@create');
    Route::get('/user', 'DemoController@userDemo')->name('user');
    Route::get('nopermission', 'DemoController@permissionDenied')->name('nopermission');

    Route::post('/create', 'ArticlesController@save')->name('articles.store');
    Route::delete('/articles/{id}', 'ArticlesController@destroy')->name('articles.destroy');

    Route::group(['middleware'=>['admin']], function (){

        Route::put('/update/{id}', 'ArticlesController@update')->name('admin.update');
        Route::get('/edit/{id}', 'ArticlesController@edit')->name('admin.edit');
        Route::patch('/edit/{id}', 'ArticlesController@edit')->name('admin.edit');

        Route::get('/admin', 'DemoController@adminDemo')->name('admin');
    });
});

Auth::routes();