<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<title>Clinic System</title>

<style>

body{
font-family: Arial;
margin:40px;
background:#f5f5f5;
}

.container{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

.navbar{
margin-bottom:20px;
}

.navbar a{
margin-right:15px;
text-decoration:none;
font-weight:bold;
color:#333;
}

table{
border-collapse:collapse;
width:100%;
}

table, th, td{
border:1px solid #ccc;
}

th, td{
padding:10px;
text-align:left;
}

.btn{
padding:6px 10px;
text-decoration:none;
border-radius:4px;
}

.btn-add{
background:#28a745;
color:white;
}

.btn-edit{
background:#007bff;
color:white;
}

.btn-delete{
background:#dc3545;
color:white;
}

.navbar-dark .navbar-nav .nav-link {
color: black;
font-weight: 500;
}

.navbar-dark .navbar-nav .nav-link:hover {
color: #ffc107;
}

.navbar-dark .navbar-nav .nav-link.active {
color: #ffc107;
}



</style>

</head>

<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand fw-bold" style="color: black;" href="/">
Clinic System
</a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link {{ request()->routeIs('doctors.*') ? 'active' : '' }}"
href="{{ route('doctors.index') }}">
Doctors
</a>
</li>

<li class="nav-item">
<a class="nav-link {{ request()->routeIs('patients.*') ? 'active' : '' }}"
href="{{ route('patients.index') }}">
Patients
</a>
</li>

<li class="nav-item">
<a class="nav-link {{ request()->routeIs('appointments.*') ? 'active' : '' }}"
href="{{ route('appointments.index') }}">
Appointments
</a>
</li>

</ul>

</div>

</div>
</nav>

<div class="container mt-5">

@yield('content')

</div>

</body>

</html>