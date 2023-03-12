<?php

namespace App\Http\Controllers;

use App\Models\login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class LoginController extends Controller
{


    public function getlogin()
    {
        return view('layoutadmin.LoginAdmin');
    }


    public function login(Request $request)
    {
        $usernamelogin = $request->input('usernamelogin');
        $user = login::where('username', 'LIKE', $usernamelogin)->first();

        if ($user && $usernamelogin == 'Admin@gmail.com' && Hash::check($request->input('passwordlogin'), $user->password)) {
            return redirect()->route('admin');
        }
        if ($user && $usernamelogin == $user->username && Hash::check($request->input('passwordlogin'), $user->password)) {
            return redirect()->route('homeclient')->with('success', 'Log in successfully');
        }
        if (!isset($user)) {
            return redirect()->route('formlogin')->with('errorlogin', 'This account is not signed up');
        } else {
            return redirect()->route('formlogin')->with('errorlogin', 'Invalid username or password.');
        }
    }

    public function resetpassword()
    {
        return view('layoutadmin.resetpassword');
    }
    public function saveresetpassword(Request $request)
    {
        $phonenumber = $request->input('oldphonenumber') ;
        $newpassword = $request->input('newpassword') ;
        $confirmnewpassword = $request->input('confirmnewpassword') ;
        $user = login::where('phone', 'LIKE', $phonenumber)->first();
        if (  isset($user) || $newpassword === $confirmnewpassword ) {
            login::where('phone', $phonenumber)->update([
                'password' =>  Hash::make ($confirmnewpassword),
            ]);
            return redirect()->route('formlogin')->with('successreset', 'This account is reset password');
        }
        return redirect()->route('resetpassword')->with('errorlogin', 'Invalid phone number or password.');

    }
}
