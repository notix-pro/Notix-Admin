<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'login_username' => 'required',
            'login_password' => 'required',
        ]);

        if (auth()->attempt(['name' => $request->login_username, 'password' => $request->login_password])) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid Email or Password');
    }
}
