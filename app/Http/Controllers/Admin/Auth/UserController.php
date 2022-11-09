<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Call this function if you want to logout form admin panel.
     */
    public function logout()
    {
        auth()->logout();

        return redirect()->route('admin.login')->with('success', trans('messages.popup.success.logout'));
    }
}
