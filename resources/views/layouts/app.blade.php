<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite
    <title>{{config('app.name')}} - @yield('title')</title>
</head>
<body>
    @section('sidebar')
        This is the master sidebar.
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
