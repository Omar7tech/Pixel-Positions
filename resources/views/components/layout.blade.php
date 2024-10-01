<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400;500;600&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" min-h-dvh bg-slate-950 text-white font-hanken-grotesk pb-20">


    <div class="px-10">
        <nav class="flex justify-between items-center bg-red py-4 border-b border-white/10">
            <div id="logo">
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div id="links" class="lg:space-x-6 md:space-x-5 font-bold">
                @auth
                    <x-nav-link url="{{ route('position.index') }}">Jobs</x-nav-link>
                    <x-nav-link url="{{ route('careers.index') }}">Careers</x-nav-link>
                    <x-nav-link url="{{ route('salaries.index') }}" >Salaries</x-nav-link>
                    <x-nav-link url="{{ route('companies.index') }}">Companies</x-nav-link>
                @else
                    @if (request()->is('login'))
                    <x-nav-link url="{{ route('register') }}">register</x-nav-link>
                    @elseif(request()->is('register'))
                        <x-nav-link url="{{ route('login') }}">Login</x-nav-link>
                    @endif
                @endauth

            </div>

            @auth
                <div id="post-job" class="flex space-x-3">
                    <a href="">Post Job</a>
                    <form action="{{ route("logout") }}" method="post">
                        @csrf
                        <button type="submit" class="bg-red-600/30 px-3 rounded">Logout</button>
                    </form>
                </div>
            @endauth

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            <div class="space-y-5">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
