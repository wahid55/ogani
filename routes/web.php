<?php

use Illuminate\Support\Facades\Auth;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});


use App\Category;
use App\Shop;
use App\User;
use App\Product;
use App\Attribute;
Route::get('/', function () {
    return 1;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
