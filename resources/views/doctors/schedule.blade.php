@extends('layouts.app')

@section('content')

<h2>{{ $doctor->name }} schedule </h2>

<table border="1" cellpadding="10">

<tr>
    <th>Date</th>
    <th>Time</th>
    <th>Patient</th>
    <th>Status</th>
</tr>

@foreach($appointments as $appointment)

<tr>
    <td>{{ $appointment->date }}</td>
    <td>{{ $appointment->time }}</td>
    <td>{{ $appointment->patient->name }}</td>
    <td>{{ $appointment->status }}</td>
</tr>

@endforeach

</table>

@endsection