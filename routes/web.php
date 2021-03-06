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

Route::get('/','UserController@hasUser');
Route::get('/dashboard', 'UserController@isUserForDashboard');
Route::get('/articles', 'UserController@isUserForArticles');
Route::get('/train','UserController@isUserForTrain');

Route::post('/signin','UserController@check');
Route::post('/signup','UserController@add');
Route::post('/signout','UserController@clear');

Route::get('/expenses','ExpenseController@expenses');
Route::post('/expense','ExpenseController@add');

Route::get('/notes','NoteController@notes');
Route::post('/note','NoteController@add');

Route::get('/feeds','ArticleController@feeds');
Route::get('/datasets','ArticleController@datasets');
Route::post('/categorize','ArticleController@categorize');

Route::get('/admin',function(){
    return view('admin');
});
Route::post('/fetch','UserController@fetch');

Route::get('/chat','UserController@hasUserForChat');
Route::post('/chat','UserController@isUserForChat');
Route::get('/chatSignout','UserController@chatclear');
Route::post('/send','UserController@storeMessage');
Route::get('/receive','UserController@getMessages');