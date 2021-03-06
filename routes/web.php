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

    


Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    Route::get('/index', 'Admin\QuestionController@index')->middleware('auth');
    Route::get('/index/question', 'Admin\QuestionController@question')->middleware('auth');
    Route::get('/index','Admin\QuestionController@title')->middleware('auth');
    Route::get('/index/question','Admin\QuestionController@open')->middleware('auth');
    Route::post('/index/question/result','Admin\ResultController@scoring')->middleware('auth');
});

//お問い合わせページ
Route::get('/contact', 'HomeController@input')->name('contact.input');
Route::post('/contact/confirm', 'HomeController@confirm')->name('contact.confirm');
Route::post('/contact/thanks', 'HomeController@send')->name('contact.send');