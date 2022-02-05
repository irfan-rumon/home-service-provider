<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function customers()
    {
       $customers = DB::table('users')->where('role', 'customer')->get();
       return view('admin.customers', ['customers' => $customers]);
    }


    public function service_providers()
    {
        $service_providers = DB::table('users')->where('role','electrician')->orWhere('role','mechanic')->get();
        return view('admin.service_providers', ['service_providers' => $service_providers]);
    }

    public function appointments()
    {
        $appointments = Appointment::all();
        return view('admin.appointments', ['appointments' => $appointments]); 
    }

    public function delete_customer($id)
    {
         User::find($id)->delete();
         return redirect()->back();
    }

    public function delete_service_provider($id)
    {
         User::find($id)->delete();
         return redirect()->back();
    }
}
