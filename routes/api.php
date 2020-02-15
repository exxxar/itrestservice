<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function () {
    Route::group([
        'namespace' => 'Api',
        'prefix' => 'auth'
    ], function () {
        Route::post('login', 'AuthController@login');
        Route::post('signup', 'AuthController@signup');
        Route::get('signup/activate/{token}', 'AuthController@signupActivate');

        Route::group([
            'middleware' => 'auth:api'
        ], function () {
            Route::get('logout', 'AuthController@logout');
            Route::get('user', 'AuthController@user');
        });
    });

    Route::group([
        'namespace' => 'Api',
        'middleware' => 'api',
        'prefix' => 'password'
    ], function () {
        Route::post('create', 'PasswordResetController@create');
        Route::get('find/{token}', 'PasswordResetController@find');
        Route::post('reset', 'PasswordResetController@reset');
        Route::get('test', function () {
            return "test";
        });
    });

    Route::group([
        'prefix' => 'methods',
        'middleware' => 'auth:api'
    ], function () {
        Route::get('test', function () {
            return "test";
        });
    });
});
