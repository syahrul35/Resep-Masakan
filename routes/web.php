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

Route::get('/', 'HomeController@login');

Route::get('/forgot', 'HomeController@forgot');

Route::get('/register', 'HomeController@register');

Route::get('/main', 'HomeController@main');

Route::get('/add', 'HomeController@add');

Route::post('/recipe', 'HomeController@recipe');

Route::post('/create_user', 'HomeController@create_user');