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

<body class ="bg-white dar:bg-gray-900">
    @inertia
</body>

</html>