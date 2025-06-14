<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', locale()) }}"@if(locale() === 'ar') dir="rtl"@endif>
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

        <link href="https://fonts.googleapis.com/css2?family=@if(locale() === 'ar'){{ Str::replace(' ', '+', config('app.arabic_font_family')) }}@else{{ Str::replace(' ', '+', config('app.latin_font_family')) }}@endif:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        {{-- Vite JS and CSS --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('headScripts')
    </head>
    <body @class([
            'antialiased',
            'font-'.Str::slug(config('app.latin_font_family')) => locale() !== 'ar',
            'font-'.Str::slug(config('app.arabic_font_family')) => locale() === 'ar',
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
    </body>
</html>