@extends('layouts.app')

@section('content')

<div class="card shadow p-4" style="max-width:600px;margin:auto;">

<h3 class="mb-4 text-center">Add Patient</h3>

<form action="{{ route('patients.store') }}" method="POST">

@csrf

<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Age</label>
<input type="number" name="age" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Gender</label>
<select name="gender" class="form-select">
<option value="male">Male</option>
<option value="female">Female</option>
</select>
</div>

<div class="mb-3">
<label class="form-label">Doctor</label>
<select name="doctor_id" class="form-select">

@foreach($doctors as $doctor)

<option value="{{ $doctor->id }}">
{{ $doctor->name }}
</option>

@endforeach

</select>
</div>

<div class="d-flex gap-2">

<button class="btn btn-success">
Save
</button>

<a href="{{ route('patients.index') }}" class="btn btn-secondary">
Back
</a>

</div>

</form>

</div>

@endsection