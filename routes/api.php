<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ClinicController;



Route::get('/doctors',
[ClinicController::class,'doctors']);
Route::get('/patients',
[ClinicController::class,'patients']);
Route::get('/appointments',
[ClinicController::class,'appointments']);

Route::post('/appointments',
[ClinicController::class,'storeAppointment']);