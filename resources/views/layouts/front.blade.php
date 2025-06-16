<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', locale()) }}"@if (locale() === 'ar') dir="rtl" @endif>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title Tag --}}
        <title>@yield('title', __('Manpower Supply & Recruitment UAE')) | {{ config('app.name') }}</title>
        {{-- Meta Description --}}
        <meta name="description" content="@yield('description', __('Tamouh Employment is a trusted manpower provider in Abu Dhabi and across the UAE, offering skilled workforce solutions for civil, mechanical, and industrial sectors. Hire qualified staff or find the right job today.'))">
        {{-- Meta Robots: --}}
        <meta name="robots" content="index, follow">
        {{-- Open Graph Tags (for social media optimization) --}}
        <meta property="og:title" content="@yield('og_title', __('Manpower Supply & Recruitment UAE')) | {{ config('app.name') }}">
        <meta property="og:description" content="@yield('og_description', __('Tamouh Employment is a trusted manpower provider in Abu Dhabi and across the UAE, offering skilled workforce solutions for civil, mechanical, and industrial sectors. Hire qualified staff or find the right job today.'))">
        <meta property="og:image" content="@yield('og_image', url('assets/logos/alter-web-logo.svg'))">
        <meta property="og:image:alt" content="{{ config('app.name') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:locale" content="{{ app()->getLocale() }}">

        {{-- Favicon --}}
        <link rel="icon" type="image/svg" href="{{ asset('images/favicon.svg') }}">

        {{-- Google fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

        <link href="https://fonts.googleapis.com/css2?family=@if (locale() === 'ar') {{ Str::replace(' ', '+', config('app.arabic_font_family')) }}@else{{ Str::replace(' ', '+', config('app.latin_font_family')) }} @endif:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        {{-- Vite JS and CSS --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('headScripts')
    </head>

    <body @class([
        'antialiased',
        'font-' . Str::slug(config('app.latin_font_family')) => locale() !== 'ar',
        'font-' . Str::slug(config('app.arabic_font_family')) => locale() === 'ar',
    ])>
        {{-- Header --}}
        @include('layouts.header')

        {{-- Main Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('layouts.footer')

        {{-- Scripts --}}
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
        @yield('bodyScripts')

        <a href="mailto:info.tamouh@gmail.com" rel="noreferrer noopener" class="fixed bottom-4 right-4 z-50 inline-flex items-center justify-center w-14 h-14 rounded-full bg-red-600">
            <div class="absolute z-10 top-0 left-0 w-full h-full rounded-full bg-red-600 animate-ping"></div>
            <div class="relative z-20">
                <svg class="text-white w-6 h-6 md:h-8 md:w-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m3.5 5.5 7.893 6.036a1 1 0 0 0 1.214 0L20.5 5.5M4 19h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                </svg>
            </div>
        </a>
    </body>
</html>
