<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', config('company.name') . ' - ' . config('company.tagline'))</title>
    <meta name="description" content="@yield('meta_description', config('company.description'))">
    <meta name="keywords" content="sedot wc jakarta, sedot wc bogor, sedot wc depok, sedot wc tangerang, sedot wc bekasi, sedot septic tank jabodetabek, pelancaran saluran mampet, gebrina jaya">
    <meta name="author" content="CV GEBRINA JAYA">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', config('company.name'))">
    <meta property="og:description" content="@yield('meta_description', config('company.description'))">
    <meta property="og:image" content="@yield('og_image', asset('images/hero-truck.jpg'))">
    <meta property="og:site_name" content="CV GEBRINA JAYA">
    <meta property="og:locale" content="id_ID">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @yield('schema_json')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50 flex flex-col min-h-screen">

    <!-- Top Announcement Bar -->
    <div class="bg-amber-500 text-slate-950 py-2 px-4 text-xs sm:text-sm font-semibold text-center flex items-center justify-center space-x-2">
        <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-extrabold bg-slate-900 text-amber-400 uppercase tracking-wider animate-pulse">
            24/7 Standby
        </span>
        <span>Layanan Sedot WC & Septic Tank Jabodetabek — Tanggap Cepat, Langsung Meluncur!</span>
        <a href="https://wa.me/{{ config('company.contact.whatsapp_number') }}?text={{ urlencode(config('company.contact.whatsapp_message_default')) }}" target="_blank" class="underline hover:text-white font-bold hidden md:inline-block">
            Hubungi Sekarang &rarr;
        </a>
    </div>

    <!-- Header Navigation Component -->
    @include('components.navbar')

    <!-- Flash Messages -->
    @if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-transition class="bg-emerald-600 text-white px-4 py-3 shadow-lg fixed top-20 right-4 z-50 rounded-xl flex items-center space-x-3 border border-emerald-400">
            <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <div class="text-sm font-medium">{{ session('success') }}</div>
            <button @click="show = false" class="text-emerald-200 hover:text-white font-bold">&times;</button>
        </div>
    @endif

    <!-- Main Page Content -->
    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- Floating WhatsApp Button -->
    @include('components.floating-wa')

    <!-- Footer Component -->
    @include('components.footer')

</body>
</html>
