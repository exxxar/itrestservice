<?php

use App\Http\Controllers\Fastoran\CategoryController;
use App\Http\Controllers\Fastoran\KitchenController;
use App\Http\Controllers\Fastoran\RestoransController;
use App\Parts\Models\Fastoran\Menu;
use App\Parts\Models\Fastoran\MenuCategory;
use App\Parts\Models\Fastoran\MenuRazdel;
use App\Parts\Models\Fastoran\MenuRubrik;
use Illuminate\Http\Request;

Route::group(['prefix' => 'v1'], function () {
    Route::group([
        'namespace' => 'Fastoran',
        'prefix' => 'fastoran'
    ], function () {
        Route::resource('restorans', 'RestoransController');
        Route::resource('cetegories', 'CategoryController');
        Route::resource('kitchens', 'KitchenController');
        Route::resource('menu_categories', 'MenuCategoryController');
        Route::resource('menu', 'MenuController');
        Route::resource('menu_razdels', 'MenuRazdelController');
        Route::resource('menu_rubriks', 'MenuRubrikController');
    });

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
