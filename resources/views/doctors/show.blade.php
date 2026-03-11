@extends('layouts.app')

@section('content')

<h1>Doctor Details</h1>

<p><strong>ID:</strong>{{ $doctor->id }}</p>

<p><strong>Name:</strong>{{ $doctor->name }}</p>
<p><strong>Specialization:</strong>{{ $doctor->specialization }}</p>
<p><strong>Phone:</strong>{{ $doctor->phone }}</p>

<br>

<h2>Patients of this doctor</h2>

@if($doctor->patients->count() > 0)

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Gender</th>
    </tr>
    @foreach($doctor->patients as $patient)
    <tr>
        <td>{{ $patient->id }}</td>
        <td>{{ $patient->name }}</td>
        <td>{{ $patient->age }}</td>
        <td>{{ $patient->phone }}</td>
        <td>{{ $patient->gender }}</td>
    </tr>
    @endforeach
</table>
@else
<p>No patients assigned to this doctor.</p>
@endif

<br>

<a class="btn btn-edit" href="{{ route('doctors.edit',$doctor->id) }}">Edit Doctor</a>
<a class="btn btn-add"  href="{{ route('doctors.index') }}">Back</a>

@endsection