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

Route::get('/', function () {
	return view('index');
});

Route::get('/welcome', function () { return view('index'); });

Auth::routes();

Route::get('/{slug}', [
    'as'   => 'page',
    'uses' => 'PageController@index'
])->where('slug', 'about-us|terms-and-conditions|support|privacy-policy|contact-us|career|blog-detail|thank-you');

Route::get('/blogs', 'Admin\BlogsController@allblogs')->name('blogs');
Route::get('/blog-detail/{id}', 'Admin\BlogsController@blogdetail')->name('blog-detail');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::view('/landing', 'pages.landing')->name('landing');
Route::view('/baby-monitoring-camera', 'baby-monitoring-camera')->name('baby-monitoring-camera');

Route::view('/categories/{slug?}', 'pages.livewire-landing')->name('categories');
Route::view('/products/{slug?}', 'pages.livewire-landing')->name('products');
Route::view('/product/{slug}', 'pages.livewire-landing')->name('product');


