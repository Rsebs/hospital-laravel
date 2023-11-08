<!DOCTYPE html>
<html lang="es">

<head>
    <title>HospitalDev | @yield('title')</title>
    <link rel="icon" href="#" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layouts.partials.styles')
</head>

<body>
    @include('layouts.partials.header')
    @yield('content')
    @include('layouts.partials.footer')
    @include('layouts.partials.scripts')
</body>

</html>
