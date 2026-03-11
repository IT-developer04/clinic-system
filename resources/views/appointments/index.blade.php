@extends('layouts.app')

@section('content')

<div class="card shadow p-4">

<div class="d-flex justify-content-between mb-3">
<h3>Appointments</h3>

<a href="{{ route('appointments.create') }}" class="btn btn-success">
Create Appointment
</a>

</div>

<table class="table table-striped table-bordered align-middle">

<thead class="table-dark">
<tr>
<th>Patient</th>
<th>Doctor</th>
<th>Date</th>
<th>Time</th>
<th>Status</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>

<tbody>

@foreach($appointments as $appointment)

<tr>

<td>{{ $appointment->patient->name }}</td>

<td>{{ $appointment->doctor->name }}</td>

<td>{{ $appointment->date }}</td>

<td>{{ $appointment->time }}</td>

<td>
<span class="badge bg-primary">
{{ $appointment->status }}
</span>
</td>

<td>
<a href="{{ route('appointments.edit',$appointment->id) }}"
class="btn btn-warning btn-sm">
Edit
</a>
</td>

<td>

<form action="{{ route('appointments.destroy',$appointment->id) }}" method="POST">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Delete
</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

</div>

@endsection