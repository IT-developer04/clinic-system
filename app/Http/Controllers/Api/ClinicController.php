<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\DoctorResource;
use App\Http\Resources\PatientResource;
use App\Http\Resources\AppointmentResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Appointment;


class ClinicController extends Controller
{
    public function doctors()
    {
        return DoctorResource::collection(Doctor::with('patients')->get());
    }
    public function patients()
    {
        return PatientResource::collection(Patient::with('doctor','appointments')->get());
    }
    public function appointments()
    {
        return AppointmentResource::collection(Appointment::with('doctor','patient')->get());
    }
    public function storeAppointment(Request $request)
    {
        $appointment = Appointment::create(['patient_id' => $request->patient_id,'doctor_id' => $request->doctor_id,'date' => $request->date,'time' => $request->time,'status' => 'pending']);
        return response()->json(['message' => 'Appointment created','data' => $appointment]);
    }
}
