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
Route::get('/findElectrician', [PageController::class, 'findElectrician']);

//Accessd by customer
Route::get('/findMechanic', [PageController::class, 'findMechanic']);
Route::post('/setAppointment/{seriveProvider}', [AppointmentController::class, 'setAppointment']);
