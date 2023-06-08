<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HARP DASHBOARD</title>

    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body >
        @inertia
</body>
<!-- <script src="{{ mix('/js/app.js') }}"></script> -->




</html>