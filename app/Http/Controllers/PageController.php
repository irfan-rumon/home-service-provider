<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class PageController extends Controller
{
    
    public function findElectrician()
    {
        $electricians = DB::table('users')->where('role', 'electrician')->get();
        return view('customer.findElectrician', ['electricians' => $electricians]);
    }

    public function findMechanic()
    {
        $mechanics = DB::table('users')->where('role', 'mechanic')->get();
        return view('customer.findMechanic', ['mechanics' => $mechanics ]);
    }
}
