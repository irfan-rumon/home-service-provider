<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [UserController::class, 'dashboard'])->middleware(['auth']);

//Accessed by customer
Route::get('/findElectrician', [PageController::class, 'findElectrician'])->middleware(['auth']);

//Accessd by customer
Route::get('/findMechanic', [PageController::class, 'findMechanic'])->middleware(['auth']);
Route::post('/setAppointment/{seriveProvider}', [AppointmentController::class, 'setAppointment'])->middleware(['auth']);
Route::get('/pending_appointments', [AppointmentController::class, 'pending_appointments'])->middleware(['auth']);
Route::get('/confirmed_appointments', [AppointmentController::class, 'confirmed_appointments'])->middleware(['auth']);
Route::get('/approve_appointment/{id}', [AppointmentController::class, 'approve_appointment']);
Route::get('/cancel_appointment/{id}', [AppointmentController::class, 'cancel_appointment']);