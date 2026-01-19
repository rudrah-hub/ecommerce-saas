<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    {{-- @include('partials.meta') --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @yield('content')
</body>

</html>
