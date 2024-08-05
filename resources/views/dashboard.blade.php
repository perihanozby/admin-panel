<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h2>Dashboard</h2>
    <p>Welcome, {{ Auth::user()->name }}!</p>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Manage Users</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
</body>
</html>
