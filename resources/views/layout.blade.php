<!doctype html>
<head>

    <title>Laravel From Scratch Blog</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    
</head>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
    <x-navigation></x-navigation>
    @yield('content')
    <x-footer></x-footer>
    </section>
</body>
