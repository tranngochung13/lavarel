<DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel 5.3 CRUD</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="page-header">
            @yield('header')
        </div>
        @yield('content')
    </div>
</body>
</html>