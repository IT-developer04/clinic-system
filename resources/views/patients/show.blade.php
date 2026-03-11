@extends('layouts.app')

@section('content')

<h1>Patient Detail</h1>

<p><strong>ID:</strong>{{ $patient->id }}</p>

<p><strong>Name:</strong>{{ $patient->name }}</p>

<p><strong>Age:</strong>{{ $patient->age }}</p>

<p><strong>Phone:</strong>{{ $patient->phone }}</p>

<p><strong>Gender:</strong>{{ $patient->gender }}</p>

<p><strong>Doctor:</strong>{{ $patient->doctor->name ?? 'No Doctor' }}</p>

<a class="btn btn-edit" href="{{ route('patients.edit',$patient->id) }}">Edit Patient</a> <br>

<br><br>

<a class="btn btn-add" href="{{ route('patients.index')}}">Back</a> <br><br>

@endsection