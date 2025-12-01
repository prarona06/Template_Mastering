<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
public function login(Request $request)
{
    $request->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);
    $credentials =$request->only('email','password');
    if(auth()->guard('admin')->attempt($credentials))
    {
        return redirect()->intended(route('admin.dashboard'));
    }
    return back()->with('error', 'Invalid credentials');
}

public function logout()
{
    auth()->guard('admin')->logout();
    return redirect()->route('admin.login');
}

}
