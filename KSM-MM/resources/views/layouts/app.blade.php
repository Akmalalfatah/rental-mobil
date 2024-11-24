<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('partials.navbar')
    
    <div class="min-h-screen">
        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>