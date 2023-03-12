<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function showdatacus()
    {
        $cus =  customer::all();
        return view('admincomponent.tables.data', compact('cus'));
    }


    public function addcustomer(Request $request)
    {
        customer::create([
            'hoten' => $request->input('name'),
            'email' => $request->input('email'),
            'sdt' => $request->input('phonenumber'),
            'diachi' => $request->input('diachi'),
            'mota' => $request->input('mota'),
        ]);
        return redirect()->route('homeclient')->with('Success', 'Your information is saved');
    }
}
