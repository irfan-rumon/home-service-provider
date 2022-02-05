<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AppointmentController extends Controller
{
    
    public function setAppointment($serviceProvider, Request $request){
        
        $appointment = new Appointment();
        $appointment->customer_id = Auth::user()->id;
        $appointment->customer_name = Auth::user()->name;
        $appointment->customer_address = Auth::user()->address;
        $appointment->customer_phone = Auth::user()->phone;
        $appointment->service_provider_id = $serviceProvider;
        $appointment->service_provider_name = User::where('id', $serviceProvider)->value('name');
        $appointment->service_provider_role = User::where('id', $serviceProvider)->value('role');
        $appointment->appointment_date = $request->appointment_date;
        $appointment->appointment_status = 'pending';
        $appointment->save();

        return redirect('dashboard');
    }

    public function pending_appointments()
    {
         $appointments = Appointment::all();
         return view('appointment.pending', ['appointments' => $appointments]);
                                             
    }
    public function confirmed_appointments()
    {
        $appointments = Appointment::all();
        return view('appointment.confirmed', ['appointments' => $appointments]);
                                              
    }

    public function approve_appointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->appointment_status = 'confirmed';
        $appointment->save();
        return redirect()->back();
    }

    public function cancel_appointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->appointment_status = 'canceled';
        $appointment->save();
        return redirect()->back();
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
