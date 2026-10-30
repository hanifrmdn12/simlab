<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title ?? 'Laboratorium Terpadu FK USU' }}</title>

    <link rel="icon" type="image/png" href="{{ asset('image/logousu.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />

</head>

<body class="font-sans antialiased bg-gray-50 text-slate-800">

    <div x-data="{ mobileMenu: false }" class="min-h-screen">

        <!-- Navbar -->
        <x-navbar />

        <!-- Main Content -->
        <main class="min-h-screen">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
