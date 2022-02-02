<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        if( Auth::user()->role == 'customer')
        {
            return view('customer.dashboard', ['name' => Auth::user()->name]);
        }
        if( Auth::user()->role == 'electrician')
        {
            return view('electrician.dashboard', ['name' => Auth::user()->name]);
        }
        if( Auth::user()->role == 'mechanic')
        {
            return view('mechanic.dashboard', ['name' => Auth::user()->name]);
        }
        if( Auth::user()->role == 'admin')
        {
            return view('admin.dashboard', ['name' => Auth::user()->name]);
        }
    }
}
