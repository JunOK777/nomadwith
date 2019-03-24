<?php


Route::group(['prefix' => 'api', 'as' => 'api.', 'namespace' => 'Api'], function() {
    Route::group(['prefix' => 'v1', 'as' => 'v1.', 'namespace' => 'V1'], function() {


        // Route::group(['middleware' => 'api.auth'], function() {
        Route::group([], function() {

            Route::group(['prefix' => 'profiles', 'as' => 'profiles.'],
              function () {
                  Route::get('/', 'ProfileController@index')->name('index');
                  Route::get('/{profile}', 'ProfileController@show')->name('show');

                  // Route::get('{profile}', 'ProfileController@create')->name('create')->middleware('auth');
                  // Route::get('{profile}', 'ProfileController@update')->name('update')->middleware('auth');
            });
        });


    });
});


/* %%ROUTES%% */
