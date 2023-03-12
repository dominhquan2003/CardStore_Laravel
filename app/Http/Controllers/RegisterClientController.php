<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterClientController extends Controller
{


    public function Register()
    {
        return view('layoutadmin.LoginAdmin');
    }




    public function Add(Request $request)
    {
        $user = login::where('username', $request->input('username'))->first();
        $userphone = login::where('phone', $request->input('phone'))->first();

        if (isset($user) || isset($userphone) ) {
            return  redirect()->route('formlogin')->with('errorregister', 'Your username or your phone number has already used !!! ');

        }
        else {
            login::create([
                'username' => $request->input('username'),
                'phone' => $request->input('phone') ,
                'password' => Hash::make($request->input('password')),
            ]);
            return redirect()->route('formlogin')->with('success','Your account is successfully created  . ');
        }
    }
}
