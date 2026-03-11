@extends('layouts.app')

@section('content')

<div class="card shadow p-4" style="max-width:600px;margin:auto;">

<h3 class="mb-4 text-center">Edit Appointment</h3>

<form action="{{ route('appointments.update',$appointment->id) }}" method="POST">

@csrf
@method('PUT')

<div class="mb-3">
<label class="form-label">Patient</label>

<select name="patient_id" class="form-select">

@foreach($patients as $patient)

<option value="{{ $patient->id }}"
{{ $appointment->patient_id == $patient->id ? 'selected' : '' }}>

{{ $patient->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label class="form-label">Doctor</label>

<select name="doctor_id" class="form-select">

@foreach($doctors as $doctor)

<option value="{{ $doctor->id }}"
{{ $appointment->doctor_id == $doctor->id ? 'selected' : '' }}>

{{ $doctor->name }}

</option>

@endforeach

</select>

</div>

<div class="mb-3">
<label class="form-label">Date</label>

<input
type="date"
name="date"
value="{{ $appointment->date }}"
class="form-control">

</div>

<div class="mb-3">
<label class="form-label">Time</label>

<input
type="time"
name="time"
value="{{ $appointment->time }}"
class="form-control">

</div>

<div class="mb-3">
<label class="form-label">Status</label>

<select name="status" class="form-select">

<option value="scheduled"
{{ $appointment->status == 'scheduled' ? 'selected' : '' }}>
Scheduled
</option>

<option value="completed"
{{ $appointment->status == 'completed' ? 'selected' : '' }}>
Completed
</option>

<option value="cancelled"
{{ $appointment->status == 'cancelled' ? 'selected' : '' }}>
Cancelled
</option>

</select>

</div>

<div class="d-flex gap-2">

<button class="btn btn-primary">
Update
</button>

<a href="{{ route('appointments.index') }}" class="btn btn-secondary">
Back
</a>

</div>

</form>

</div>

@endsection