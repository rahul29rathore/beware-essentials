<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin" middleware group. Now create something great!
|
*/

Route::group(['as' => 'admin.', 'namespace' => 'Admin\\'], function () {
	Route::get('/', function(){
		return redirect(route('admin.dashboard'));
	});
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('users', 'UserController');
	Route::resource('products', 'ProductController');
	Route::resource('blogs', 'BlogsController');
	Route::resource('categories', 'CategoryController');
	Route::view('sub-categories', 'livewire.admin.categories.index')->name('categories.sub-categories.index');
	Route::view('product-types', 'livewire.admin.product_types.index')->name('product-types.index');
	Route::view('product-leads', 'livewire.admin.products.leads.index')->name('product-leads.index');
	Route::view('contact-us-leads', 'livewire.admin.leads.contact_us.index')->name('contact-us-leads.index');
	Route::get('/distributer', 'DashboardController@distributer')->name('distributer');
	Route::get('/carrers', 'DashboardController@carrers')->name('carrers');
});
