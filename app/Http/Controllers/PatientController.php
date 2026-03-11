<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       $search = $request->search;

        $patients = Patient::with('doctor')->when($search,function ($query) use ($search){
            $query->where('name','like',"%{$search}%")->orWhere('phone','like',"%{$search}%");
        })->orderBy('id','desc')->paginate(5);
        return view('patients.index',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $doctors = Doctor::all();
        return view('patients.create',compact('doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required',
            'phone' => 'required|string|max:255',
            'gender' => 'required',
            'doctor_id' => 'required',
        ]);

        Patient::create($validated);

        return redirect()->route('patients.index')->with('success','Patient created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        $patient->load('doctor');
        return view('patients.show',compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        $doctors = Doctor::all();
        return view('patients.edit',compact('patient','doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required',
            'phone' => 'required|string|max:255',
            'gender' => 'required',
             'doctor_id' => 'required',
        ]);

        $patient->update($validated);

        return redirect()->route('patients.index')->with('success','Patien updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()->route('patients.destroy')->with('success','Patient deleted');
    }
}
