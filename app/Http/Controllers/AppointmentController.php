<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AppointmentController extends Controller
{
    
    public function setAppointment($serviceProvider, Request $request){
        
        $appointment = new Appointment();
        $appointment->customer_id = Auth::user()->id;
        $appointment->service_provider_id = $serviceProvider;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_status = 'pending';
        $appointment->save();

        return redirect('dashboard');
    }

    public function pending_appointments()
    {
         return view('appointment.pending');
    }
    public function confirmed_appointments()
    {
        return view('appointment.confirmed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment $appointment)
    {
        //
    }
}
