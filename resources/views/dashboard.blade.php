@extends('layouts.app')

@section('content')

<h1>Clinic Dashboard</h1>

<br>

<div style="display: flex; gap:30px">

<div style="padding: 20px; background:#f2f2f2">
<h2>Doctors</h2> 
<h1>{{ $doctors }}</h1>   
</div>

<div style="padding: 20px; background:#f2f2f2" >
<h2>Patients</h2>
<h1>{{ $patients }}</h1>
</div>

<div style="padding: 20px; background:#f2f2f2">
<h2>Male</h2>
<h1>{{ $male }}</h1>
</div>

<div style="padding: 20px; background:#f2f2f2">
<h2>Femail</h2>
<h1>{{ $female }}</h1>
</div>

</div>

@endsection