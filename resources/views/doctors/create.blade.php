@extends('layouts.app')

@section('content')

<div class="card shadow p-4">

<h3 class="mb-4">Create Doctor</h3>
 <h1>Create Doctor</h1>
    @if($errors->any())
    <div style="color:red">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{ route('doctors.store') }}" method="POST">
@csrf

<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Specialization</label>
<input type="text" name="specialization" class="form-control">
</div>

<div class="mb-3">
<label class="form-label">Phone</label>
<input type="text" name="phone" class="form-control">
</div>

<button class="btn btn-primary">Save</button>

<a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back</a>

</form>

</div>

@endsection

   