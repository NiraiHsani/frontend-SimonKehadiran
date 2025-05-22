<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <div class="bg-dark text-white p-3" style="width: 200px; height: 100vh;">
        <h4>Menu</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('user.index') }}">User</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="{{ route('kelas.index') }}">Kelas</a></li>
        </ul>
    </div>
    <div class="p-4" style="flex-grow: 1;">
        @yield('content')
    </div>
</div>
</body>
</html>
