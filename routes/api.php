<?php

use App\Http\Controllers\Fastoran\CategoryController;
use App\Http\Controllers\Fastoran\KitchenController;
use App\Http\Controllers\Fastoran\RestoransController;
use App\Parts\Models\Fastoran\Menu;
use App\Parts\Models\Fastoran\MenuCategory;
use App\Parts\Models\Fastoran\MenuRazdel;
use App\Parts\Models\Fastoran\MenuRubrik;
use App\Parts\Models\Fastoran\Order;
use App\Parts\Models\Fastoran\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

Route::group(['prefix' => 'v1'], function () {
    Route::post('/wish', function (Request $request) {
       $phone = $request->get("phone");
       $email = $request->get("email");
       $from = $request->get("from");

       Log::info("PHONE: $phone\nEMAIL: $email\nFROM: $from");

        return response()
            ->json([
                "message"=>"success",
                "status"=>200
            ]);
    });

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
        Route::resource('orders', 'OrderController');
        Route::resource('order_details', 'OrderDetailController');
    });

    Route::group([
        'namespace' => 'Api',
        'prefix' => 'auth'
    ], function () {
        Route::post('login', 'AuthController@login');
        Route::post('signup', 'AuthController@signup');
        Route::get('signup/activate/{token}', 'AuthController@signupActivate')->name("signup.verify");

        Route::group([
            'middleware' => 'auth:api'
        ], function () {
            Route::any('logout', 'AuthController@logout');
            Route::any('user', 'AuthController@user');
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
        Route::any('history',function (){
            //todo: вынести в метод
            $orders = Order::with(["details"])->where("user_id",auth()->guard('api')->user()->id)
                ->get();

            return response()
                ->json([
                    "message"=>"success",
                    "orders"=>$orders,
                    "status"=>200
                ]);
        });

        Route::post('order', function (Request $request) {

            //todo: вынести в метод
            $order = Order::create($request->all());
            $order->user_id = auth()->guard('api')->user()->id;
            $order->save();

            $order_details = $request->get("order_details");

            foreach ($order_details as $od){
                $detail = OrderDetail::create($od);
                $detail->order_id = $order->id;
                $detail->save();
            }

            return response()
                ->json([
                    "message"=>"success",
                    "data"=>$request->all(),
                    "status"=>200
                ]);
        });
    });
});
