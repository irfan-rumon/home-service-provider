<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {
        if( Auth::user()->role('customer'))
        {
            return view('customer.dashboard');
        }
        if( Auth::user()->role('electrician'))
        {
            return view('electrician.dashboard');
        }
        if( Auth::user()->role('mechanic'))
        {
            return view('mechanic.dashboard');
        }
        if( Auth::user()->role('admin'))
        {
            return view('admin.dashboard');
        }
    }
}
