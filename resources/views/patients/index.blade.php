@extends('layouts.app')
@section('content')

<h1>Patients list</h1>

<a class="btn btn-add" href="{{ route('patients.create') }}">Add Patient</a>

<br><br>

<table>

<form method="GET" action="{{ route('patients.index') }}">

<input type="text" name="search" placeholder="Search patient" value="{{ request('search') }}">

<button type="submit">Search</button>
 
</form>

<br><br>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Doctor</th>
    <th>Edit</th>
    <th>Show</th>
    <th>Delete</th>
</tr>

@foreach($patients as $patient)

<tr>

<td>{{ $patient->id }}</td>
<td>{{ $patient->name }}</td>
<td>{{ $patient->age }}</td>
<td>{{ $patient->phone }}</td>
<td>{{ $patient->gender }}</td>
<td>{{ $patient->doctor->name ?? 'No Doctor' }}</td>

<td><a class="btn btn-edit" href="{{ route('patients.edit',$patient->id) }}">Edit</a></td>
<td><a class="btn btn-add" href="{{ route('patients.show',$patient->id) }}">Show</a></td>
<td>
    <form action="{{ route('patients.destroy',$patient->id) }}" method="POST">
        @csrf 
        @method('DELETE')
        <button class="btn btn-delete">Delete</button>
    </form>
</td>
</tr>

@endforeach

</table>

<br>

{{ $patients->links() }}

@endsection