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

// Auth
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// Auth Provider
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
// Auth OTP
Route::post('login-otp',"Auth\LoginController@loginOtp")->name('login.otp');
Route::get('callback-otp',"Auth\LoginController@callbackOtp");

// Landing Page, Portofolio
Route::get('/', 'DashboardController@landing')->name('landing');
Route::get('portofolio-all', 'PortofolioController@all')->name('portofolio');

// Admin
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('activity', 'DashboardController@activity')->name('activity.index');
Route::get('profile', 'ProfileController@show')->name('profile.show');
Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('profile/edit', 'ProfileController@update')->name('profile.update');

// Kelola portofolio, testimoni
Route::resource('portofolio', 'PortofolioController');
Route::resource('testimoni', 'TestimoniController')->except(['show']);
Route::resource('portofolio/{portofolio_id}/fitur', 'FiturController')->except(['show', 'edit', 'update']);
Route::resource('portofolio/{portofolio_id}/gambar', 'GambarController')->except(['show', 'edit', 'update']);
