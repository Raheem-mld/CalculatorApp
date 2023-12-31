<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculator App</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>
