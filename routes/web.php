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

Auth::routes();

Route::get('/home', 'PostController@indexAllpost')->name('home');
Route::get('/profile/{id}', 'UserController@edit')->name('profileEdit');
Route::PUT('/profile/{id}', 'UserController@update')->name('profileUpdate');
Route::resource('/posts', 'PostController');
Route::get('/{id}/profile-pic', "UserAccountController@editProfilePic");
Route::resource('comments', 'CommentsController');

Route::get('auth/{provider_type}', 'AuthenticationProviderController@redirect');
Route::get('auth/{provider_type}/callback', 'AuthenticationProviderController@callback');

