<?php

namespace App\Http\Controllers;

use App\Models\orderform;
use App\Models\orderformdetail;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function showdataorder()
    {

        $orders = orderform::all();
        return view('admincomponent.order.order', compact('orders')); //  show product and list product
    }

    public function showdataorderdetail()
    {

        $ordersde = orderformdetail::all();
        return view('admincomponent.order.orderdetail', compact('ordersde')); //  show product and list product
    }
}
