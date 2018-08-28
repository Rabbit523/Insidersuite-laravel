<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function list_orders()
    {
    	return view('orders');
    }
}
