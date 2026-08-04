<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-black text-white antialiased">

    <div class="mx-auto min-h-screen max-w-7xl px-6 lg:px-8">

        <nav class="flex items-center justify-between border-b border-white/10 py-6">

            <!-- Logo -->
            <a href="/" class="shrink-0">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Pixel Positions" class="h-10 w-auto">
            </a>

            <!-- Navigation -->
            <div class="hidden items-center gap-8 text-sm font-medium md:flex">
                <a href="#" class="transition hover:text-blue-400">Jobs</a>
                <a href="#" class="transition hover:text-blue-400">Careers</a>
                <a href="#" class="transition hover:text-blue-400">Salaries</a>
                <a href="#" class="transition hover:text-blue-400">Companies</a>
            </div>

            <!-- CTA -->
            <a href="#"
                class="rounded-lg border border-white/15 px-5 py-2 text-sm font-semibold transition hover:border-blue-500 hover:bg-blue-500">
                Post a Job
            </a>

        </nav>

        <main class="mx-auto mt-14 max-w-6xl">
            {{ $slot }}
        </main>

    </div>

</body>

</html>
