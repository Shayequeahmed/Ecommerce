<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //

    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:30',
        ]);

        $ret = Auth::guard('admin')->attempt($request->only('email', 'password'));

        if ($ret === false) {
            return redirect()
                    ->back()
                    ->with('error','Invalid Credential.');
        }

        return redirect()
                ->intended('admin/dashboard')
                    ->with('success','Welcome To Admin Dashboard');
    }

   public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with('success','You are Logout');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
