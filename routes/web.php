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

// Route::get('/{any}', function(){
//     return view('welcome');
// })->where('any','.*');

// Route::get('/', function(){
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('auth/login', 'Auth\SocialController@viewLogin');
Route::get('auth/login/facebook', 'Auth\SocialController@redirectToFacebookProvider');
Route::get('auth/facebook/callback', 'Auth\SocialController@handleFacebookProviderCallback');


Route::group(['prefix' => 'profiles', 'as' => 'profiles.'],
  function () {
      Route::get('/', 'User\ProfileController@index')->name('index');
      Route::get('/{profile}', 'User\ProfileController@show')->name('show');

      // Route::get('{profile}', 'User\ProfileController@create')->name('create')->middleware('auth');
      // Route::get('{profile}', 'User\ProfileController@update')->name('update')->middleware('auth');
});