<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //

    public function notify(Request $request)
    {
        return response()->noContent();
    }

    public function success(Request $request)
    {
        return response()->noContent();
    }

    public function failure(Request $request)
    {
        return response()->noContent();
    }
}
