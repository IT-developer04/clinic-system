@extends('layouts.app')

@section('content')

<div class="card shadow p-4">

<h3 class="mb-4">Doctors list</h3>

<a href="{{ route('doctors.create') }}" class="btn btn-success mb-3">
Add Doctor
</a>

<table class="table table-striped table-bordered">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Name</th>
<th>Specialization</th>
<th>Phone</th>
<th>Created</th>
<th>View</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>

<tbody>

@foreach($doctors as $doctor)

<tr>

<td>{{ $doctor->id }}</td>

<td>{{ $doctor->name }}</td>

<td>{{ $doctor->specialization }}</td>

<td>{{ $doctor->phone }}</td>

<td>{{ $doctor->created_at }}</td>

<td>
<a href="{{ route('doctors.show',$doctor->id) }}"
class="btn btn-primary btn-sm">
View
</a>
</td>

<td>
<a href="{{ route('doctors.edit',$doctor->id) }}"
class="btn btn-warning btn-sm">
Edit
</a>
</td>

<td>
<form action="{{ route('doctors.destroy',$doctor->id) }}"
method="POST">

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