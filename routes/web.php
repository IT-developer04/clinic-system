<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware(['auth','role:admin'])->group(function (){
Route::resource('doctors',
DoctorController::class);
});
Route::get('/doctor', 
[DoctorController::class,'index']);
Route::resource('doctors',
DoctorController::class);
Route::resource('patients',
PatientController::class);
Route::get('/',
[DashboardController::class,'index'])->name('dashboard');
Route::resource('appointments',
AppointmentController::class);
Route::get('/doctors/{id}/schedule',
[DoctorController::class,'schedule']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
