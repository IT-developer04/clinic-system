@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Doctor</title>
</head>
<body>

    <h1>Edit Doctors</h1>
    
    @if($errors->any())
    <div style="color:red;">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
     @endif
    <form action="{{ route('doctors.update',$doctor->id) }}" method="POST">
        @csrf 
        @method('PUT')
        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name',$doctor->name) }}">
        </div>
        <br>
        <div>
            <label>Specialization</label>
            <input type="text" name="specialization" value="{{ old('specialization',$doctor->specialization)}}">
        </div>
        <br>
        <div>
            <label>Phone</label>
            <input type="text" name="phone" value="{{ old('phone', $doctor->phone)}}">
        </div>
        <button type="submit">Update</button>
    </form>
    
    <br>
    <a href="{{ route('doctors.index') }}">Back</a>
    
</body>
</html>
