@extends('layouts.app')

@section('content')

@if(session('error'))
<div style="color:red">
    {{ session('error')}}
</div>
@endif
<h2>Create Appointment</h2>

<form method="POST" action="{{ route('appointments.store') }}">
    @csrf 
    
    <label>Doctor</label>
    <select name="doctor_id">
        @foreach($doctors as $doctor)
        <option value="{{ $doctor->id }}">
            {{ $doctor->name }}
        </option>
        @endforeach
    </select>

    <br><br>

    <label>Patient</label>
    <select name="patient_id">
        @foreach($patients as $patient)
        <option value="{{ $patient->id }}">
            {{ $patient->name }}
        </option>
        @endforeach
    </select>

    <label>Date</label>
    <input type="date" name="date">

    <br><br>

    <label>Time</label>
    <input type="time" name="time">

    <br><br>

    <label>Status</label>
    <select name="status">
        <option value="scheduled">Scheduled</option>
        <option value="completed">Completed</option>
        <option value="cancelled">Cancelled</option>
    </select>

    <br><br>

    <button type="submit">Create Appointment</button>

</form>

@endsection