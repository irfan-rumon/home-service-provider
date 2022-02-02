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
            return view('customer.dashboard', ['profile' => Auth::user() ]);
        }
        
        if( Auth::user()->role == 'electrician')
        {
            return view('electrician.dashboard', ['profile' => Auth::user() ]);
        }
        if( Auth::user()->role == 'mechanic')
        {
            return view('mechanic.dashboard', ['profile' => Auth::user()  ]);
        }
        if( Auth::user()->role == 'admin')
        {
            return view('admin.dashboard', ['profile' => Auth::user()   ]);
        }
    }
}
