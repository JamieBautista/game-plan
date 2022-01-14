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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', array('as' => 'homePage', 'uses' => 'HomeController@index'));
Route::get('/games/{list}', array('as' => 'gamesPage', 'uses' => 'HomeController@games'));
Route::get('/login', array('as' => 'loginPage', 'uses' => 'UserController@login'));
Route::get('/signup', array('as' => 'signupPage', 'uses' => 'UserController@signup'));
Route::post('/signup-request', array('as' => 'signupRequest', 'uses' => 'UserController@add_user'));