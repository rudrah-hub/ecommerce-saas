<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
</body>

</html>
