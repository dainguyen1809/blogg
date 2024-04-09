<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.components.account.login');
    }
    public function checkLogin(Request $req)
    {
        $remember_me = $req->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $req->input("email"), 'password' => $req->input("password")], $remember_me)) {

            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error' => 'Unknow email or password']);
    }

    public function index()
    {
        if (!Auth::guard('admin')->user()) {
            return redirect()->route('admin.login')->with('error', 'Please Log in !!');
        }
        return view('admin.components.home.index');
    }
}
