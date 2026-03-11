@extends('layouts.app')

@section('content')

<h1>Edit Patient</h1>

<form action="{{ route('patients.update',$patient->id) }}" method="POST">
    @csrf 
    @method('PUT')

    <label>Name</label>
    <input type="text" name="name" value="{{ old('name',$patient->name) }}">

    <br><br>

    <label>Age</label>
    <input type="text" name="age" value="{{ old('age',$patient->age) }}">

    <br><br>

    <label>Phone</label>
    <input type="text" name="phone" value="{{ old('phone',$patient->phone) }}">

    <br><br>

    <label>Gender</label>
    
    <select name="gender">
        <option value="male" {{ $patient->gender=='male'?'selected':''}}>Male</option>
        <option value="female"{{ $patient->gender=='female'?'selected':''}}>Female</option>
    </select>

    <br><br>

    <label>Doctor</label>

    <select name="doctor_id">
        @foreach($doctors as $doctor)

        <option value="{{ $doctor->id }}" {{ $patient->doctor_id == $doctor->id ? 'selected' : ''}}>{{ $doctor->name }}</option>

        @endforeach

    </select>
    <br><br>

    <button type="submit">Update</button>
</form>

<br><br>

<a href="{{ route('patients.index') }}">Back</a> <br><br>

@endsection