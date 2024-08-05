<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.navbar')
    @include('layouts.sidebar')

    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>
</div>
<script src="{{ asset('node_modules/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('node_modules/admin-lte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
