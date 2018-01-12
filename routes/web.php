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

Route::get('/index', array(
    'as' => 'index',
    'uses' => 'Controller@index'
));

Route::get('/profile', array(
    'as' => 'profile',
    'uses' => 'Controller@profile'
));

Route::get('/wallet', array(
    'as' => 'wallet',
    'uses' => 'Controller@wallet'
));

Route::get('/addmoney', array(
    'as' => 'addmoney',
    'uses' => 'Controller@addmoney'
));

Route::get('/transfer', array(
    'as' => 'transfer',
    'uses' => 'Controller@transfer'
));

Route::get('/protectedPage',array(
    'as'=>'protectedPage',
    'uses'=>'Controller@protectedPage'
))->middleware('auth');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');