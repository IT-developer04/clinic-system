<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;

class DashboardController extends Controller
{
    public function index()
    {
        $doctors = Doctor::count();
        $patients = Patient::count();
        $male = Patient::where('gender','male')->count();
        $female = Patient::where('gender','male')->count();

        return view('dashboard',compact('doctors','patients','male','female'));

    }
}
