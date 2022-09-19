<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Auth;

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
    return view('home');
});

// about
Route::resource('about', 'AboutController');
Route::resource('paket', 'PaketController');
Route::get('detail', 'PaketController@show');

// gallery
Route::resource('gallery', 'GalleryController');

//login register
Route::resource('register', 'RegisterController');
Route::resource('login', 'LoginController');


//pesan
Route::get('pesan/{id}', 'PesanController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('transaction', 'TransactionController@index');
Route::get('profile', 'ProfileController@index');
Route::get('/profile/{id}', 'ProfileController@edit');
Route::post('/update-profile{id}', 'ProfileController@update')->name('update-profile'); //update


//dashboard
Route::get('das', 'DashboardController@index')->name('dashboard');
Route::get('create', 'DashboardController@create')->name('paket-create');
Route::get('index', 'DashboardController@show')->name('paket-index');
Route::get('/paket/{id}/edit', 'PaketController@edit')->name('paket-edit');
Route::post('/update-paket{id}', 'PaketController@update')->name('update-paket'); //update

Route::get('create-gallery', 'GalleryController@create')->name('galeri-create');
Route::get('index-gallery', 'GalleryController@show')->name('galeri-index');
Route::get('edit-gallery', 'GalleryController@edit')->name('galeri-edit');
Route::post('store-gallery', 'GalleryController@store')->name('galeri-store');

Route::get('index-pesan', 'PesanController@admin')->name('pesan-index');
Route::post('store-pesan', 'PesanController@store')->name('pesan-store');
Route::post('index-pesan-upload', 'PesanController@indexpesanupload')->name('index-pesan-upload');
Route::get('pesan-bukti', 'PesanController@pesanbukti')->name('pesan-bukti');
