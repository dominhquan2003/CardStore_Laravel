<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class HomePageController extends Controller
{
    public function index()
    {
        $data = [
            'products' => product::all(),
        ];
        return view('client.section')->with($data);
    }

   
}
